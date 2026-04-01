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

/* admin/admin.environnements.html.twig */
class __TwigTemplate_b61f58c2c5f9b3da814da584bab1d2de extends Template
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
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "admin/admin.environnements.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "
    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.environnement.ajout");
        yield "\">
        <div class=\"form-group mr-1 mb-2\">
            <input type=\"text\" class=\"sm\" name=\"nom\">
            <button type=\"submit\" class=\"btn btn-primary mb-2 btn-sm\">Ajouter</button>
        </div>
    </form>   
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>
                    Nom
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["environnements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["environnement"]) {
            // line 24
            yield "                <tr>
                    <td>
                        ";
            // line 26
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["environnement"], "nom", [], "any", false, false, false, 26), "html", null, true);
            yield "
                    </td>
                    <td>
                        <a href=\"";
            // line 29
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.environnement.suppr", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["environnement"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-danger\" 
                           onclick=\"return confirm('Etes-vous sûr de vouloir supprimer ";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["environnement"], "nom", [], "any", false, false, false, 31), "html", null, true);
            yield " ?')\">
                            Supprimer
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['environnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "        </tbody>
    </table>
    
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/admin.environnements.html.twig";
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
        return array (  106 => 37,  94 => 31,  89 => 29,  83 => 26,  79 => 24,  75 => 23,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/admin.environnements.html.twig", "/opt/homebrew/var/www/mesvoyages0.1/templates/admin/admin.environnements.html.twig");
    }
}
