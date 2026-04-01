<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages/accueil.html.twig */
class __TwigTemplate_84f632997117fb4d6cd7382e54fb91c9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "basefront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("basefront.html.twig", "pages/accueil.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "<h1>Page d'accueil</h1>
    <p class=\"mt-3\">
        <h3>Bienvenue sur mon site personnel de présentation de mes voyages.</h3>
    </p>
    <p class=\"mt-3\">
        Dans la partie <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages");
        yield "\">Voyages</a>, vous pouvez voir la liste des visites que j'ai faites dans différentes villes.<br/>
        A chaque fois j'ai précisé la ville visitée, le pays, j'ai mis une note (entre 0 et 20) et il y a aussi la date de la visite.<br/>
        Vous pouvez trier la liste en fonction des villes, des pays, des notes et des dates, 
        aussi bien dans l'ordre croissant que décroissant.<br/>
        Vous pouvez aussi filtrer les visites par rapport à une ville ou un pays.<br/>
        En cliquant sur la ville de la visite, vous pourrez avoir plus d'informations dessus :<br/>
        températures min et max, une description de la visite, les environnements (montagne, mer, désert...) et une photo.<br/>
        Enfin, vous pouvez me contacter avec le formulaire de <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\">Contact</a>.
    </p>
    <p>
        Voici mes 2 derniers voyages :
    </p>
    <table>
        <tr>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["visites"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["visite"]) {
            // line 24
            yield "                <td style=\"vertical-align: text-top; width: 50%\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <!-- emplacement photo -->
                            ";
            // line 28
            if (CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "imagename", [], "any", false, false, false, 28)) {
                // line 29
                yield "                                <img src=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 29), "getBasePath", [], "method", false, false, false, 29) . $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["visite"], "imageFile")), "html", null, true);
                yield "\" 
                                     class=\"card-img-top\" style=\"width:100%;height:auto;\">
                            ";
            }
            // line 32
            yield "                        </div>
                        <div class=\"col\">
                            <p>";
            // line 34
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "datecreationstring", [], "any", false, false, false, 34), "html", null, true);
            yield "</p>
                            <h5 class=\"text-primary\">
                                <a href=\"";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.showone", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "ville", [], "any", false, false, false, 36), "html", null, true);
            yield "</a>
                            </h5>
                            <p>";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "pays", [], "any", false, false, false, 38), "html", null, true);
            yield "</p>
                            ";
            // line 39
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "note", [], "any", false, false, false, 39) >= 10)) {
                // line 40
                yield "                                <div class=\"text-success\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "note", [], "any", false, false, false, 40), "html", null, true);
                yield "/20</div>
                            ";
            } else {
                // line 42
                yield "                                <div class=\"text-danger\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "note", [], "any", false, false, false, 42), "html", null, true);
                yield "/20</div>
                            ";
            }
            // line 44
            yield "                            t° entre ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "tempmin", [], "any", false, false, false, 44), "html", null, true);
            yield "° et ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "tempmax", [], "any", false, false, false, 44), "html", null, true);
            yield "°<br />
                            <strong>Environnements :</strong><br/>
                            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "environnements", [], "any", false, false, false, 46));
            foreach ($context['_seq'] as $context["_key"] => $context["environnement"]) {
                // line 47
                yield "                                ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["environnement"], "nom", [], "any", false, false, false, 47), "html", null, true);
                yield "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['environnement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield "                        </div>    
                    </div>                    
                </td>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "    
        </tr>
    </table>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/accueil.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  161 => 52,  152 => 49,  143 => 47,  139 => 46,  131 => 44,  125 => 42,  119 => 40,  117 => 39,  113 => 38,  106 => 36,  101 => 34,  97 => 32,  90 => 29,  88 => 28,  82 => 24,  78 => 23,  68 => 16,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/accueil.html.twig", "/opt/homebrew/var/www/mesvoyages0.1/templates/pages/accueil.html.twig");
    }
}
