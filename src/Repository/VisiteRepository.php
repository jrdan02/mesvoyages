<?php

namespace App\Repository;

use App\Entity\Visite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Visite>
 *
 * @method Visite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Visite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Visite[]    findAll()
 * @method Visite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VisiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Visite::class);
    }

    /**
     * Supprime une visite
     * @param Visite $visite
     * @return void
     */
    public function remove(Visite $visite): void
    {
        $this->getEntityManager()->remove($visite);
        $this->getEntityManager()->flush();
    }    
    
    /**
     * Ajoute ou modifie une visite
     * @param Visite $visite
     * @return void
     */
    public function add(Visite $visite): void
    {
        $this->getEntityManager()->persist($visite);
        $this->getEntityManager()->flush();
    }    
    
    /**
     * Retourne toutes les visites triées sur un champ
        * @param string $champ
        * @param string $ordre
     * @return Visite[]
     */
    public function findAllOrderBy(string $champ, string $ordre): array{
        return $this->createQueryBuilder('v')
                ->leftJoin('v.environnements', 'e')
                ->addSelect('e')
                ->orderBy('v.'.$champ, $ordre)
                ->getQuery()
                ->getResult();
    }

    /**
     * Retourne les visites dont un champ est égal à une valeur
        * @param string $champ
        * @param string|null $valeur
     * @return Visite[]
     */
    public function findByEqualValue(string $champ, ?string $valeur): array{
        if ($champ === 'environnement' || $champ === 'environnements') {
            return $this->findAllByEnvironnement($valeur);
        }

        if($valeur==""){
            return $this->createQueryBuilder('v')
                    ->leftJoin('v.environnements', 'e')
                    ->addSelect('e')
                    ->orderBy('v.datecreation', 'DESC')
                    ->getQuery()
                    ->getResult();            
        }else{
            return $this->createQueryBuilder('v')
                    ->where('v.'.$champ.'=:valeur')
                    ->setParameter('valeur', $valeur)
                    ->leftJoin('v.environnements', 'e')
                    ->addSelect('e')
                    ->orderBy('v.datecreation', 'DESC')
                    ->getQuery()
                    ->getResult();                   
        }
    }

    /**
     * Retourne les visites filtrées par environnement (nom)
     * ou toutes les visites si la valeur est vide.
     *
     * @param string|null $valeur
     * @return Visite[]
     */
    public function findAllByEnvironnement(?string $valeur): array
    {
        $queryBuilder = $this->createQueryBuilder('v')
            ->leftJoin('v.environnements', 'e')
            ->addSelect('e')
            ->orderBy('v.datecreation', 'DESC')
            ->distinct();

        $environnement = trim((string) $valeur);
        if ($environnement !== '') {
            $queryBuilder
                ->andWhere('LOWER(e.nom) = LOWER(:environnement)')
                ->setParameter('environnement', $environnement);
        }

        return $queryBuilder
            ->getQuery()
            ->getResult();
    }
    public function findAlllasted($nb):array{
        return $this->createQueryBuilder('v')
        ->orderBy('v.datecreation', 'DESC')
           ->setMaxResults($nb)     
           ->getQuery()
           ->getResult();   

    }
    
}
