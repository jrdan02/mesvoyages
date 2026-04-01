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

/* admin/admin.voyages.html.twig */
class __TwigTemplate_3a3354f2e64cd0b94fb030a3ce3e9735 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.voyages.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.voyages.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "admin/admin.voyages.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "                    
    <p class=\"text-end\">
        <a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.voyage.ajout");
        yield "\" class=\"btn btn-primary\">
            Ajouter une nouvelle visite
        </a>
    </p>           
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>
                    Ville
                </th>
                <th>
                    Pays
                </th>
                <th>
                    Date
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["visites"]) || array_key_exists("visites", $context) ? $context["visites"] : (function () { throw new RuntimeError('Variable "visites" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["visite"]) {
            // line 29
            yield "                <tr>
                    <td>
                        <h5 class=\"text-primary\">
                            ";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "ville", [], "any", false, false, false, 32), "html", null, true);
            yield "
                        </h5>
                    </td>
                    <td>
                        ";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "pays", [], "any", false, false, false, 36), "html", null, true);
            yield "
                    </td>
                    <td>
                        ";
            // line 39
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "datecreationstring", [], "any", false, false, false, 39), "html", null, true);
            yield "
                    </td>
                    <td>
                        <a href=\"";
            // line 42
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.voyage.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"btn btn-secondary\">Editer</a>
                        <a href=\"";
            // line 43
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.voyage.suppr", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\" class=\"btn btn-danger\" onclick=\"return confirm('Etes-vous sûr de vouloir supprimer ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "ville", [], "any", false, false, false, 43), "html", null, true);
            yield " ?')\">Supprimer</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "        </tbody>
    </table>
            
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/admin.voyages.html.twig";
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
        return array (  142 => 47,  130 => 43,  126 => 42,  120 => 39,  114 => 36,  107 => 32,  102 => 29,  98 => 28,  73 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseadmin.html.twig\" %}

{% block body %}
                    
    <p class=\"text-end\">
        <a href=\"{{ path('admin.voyage.ajout') }}\" class=\"btn btn-primary\">
            Ajouter une nouvelle visite
        </a>
    </p>           
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>
                    Ville
                </th>
                <th>
                    Pays
                </th>
                <th>
                    Date
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            {% for visite in visites %}
                <tr>
                    <td>
                        <h5 class=\"text-primary\">
                            {{ visite.ville }}
                        </h5>
                    </td>
                    <td>
                        {{ visite.pays }}
                    </td>
                    <td>
                        {{ visite.datecreationstring }}
                    </td>
                    <td>
                        <a href=\"{{ path('admin.voyage.edit', {id:visite.id}) }}\" class=\"btn btn-secondary\">Editer</a>
                        <a href=\"{{ path('admin.voyage.suppr', {id:visite.id}) }}\" class=\"btn btn-danger\" onclick=\"return confirm('Etes-vous sûr de vouloir supprimer {{ visite.ville }} ?')\">Supprimer</a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
            
{% endblock %}", "admin/admin.voyages.html.twig", "/opt/homebrew/var/www/mesvoyages0.1/templates/admin/admin.voyages.html.twig");
    }
}
