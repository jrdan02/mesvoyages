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

/* pages/voyages.html.twig */
class __TwigTemplate_7f017a284d08c554eb3f4cd569758ad4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/voyages.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/voyages.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "pages/voyages.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        yield "    <table class=\"table table-striped\">
        <thead>
            <tr>        
                <th class=\"text-left align-top\" scope=\"col\">
                    Ville
                    <a href=\"";
        // line 8
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.sort", ["champ" => "ville", "ordre" => "ASC"]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.sort", ["champ" => "ville", "ordre" => "DESC"]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>                    
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.findallequal", ["champ" => "ville"]);
        yield "\">
                        <div class=\"form-group mr-1 mb-2\">
                                
                            <input type=\"text\" class=\"sm\" name=\"recherche\">   
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_ville"), "html", null, true);
        yield "\">                    
                            <button type=\"submit\" class=\"btn btn-primary mb-2 btn-sm\">filtrer</button>
                        </div>
                    </form>                    
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    Pays
                    <a href=\"";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.sort", ["champ" => "pays", "ordre" => "ASC"]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"";
        // line 22
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.sort", ["champ" => "pays", "ordre" => "DESC"]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>                    
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.findallequal", ["champ" => "pays"]);
        yield "\">
                        <div class=\"form-group mr-1 mb-2\">
                            
                            <input type=\"text\" class=\"sm\" name=\"recherche\">  
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_pays"), "html", null, true);
        yield "\">                     
                            <button type=\"submit\" class=\"btn btn-primary mb-2 btn-sm\">filtrer</button>
                        </div>
                    </form> 
                </th>
                <th class=\"text-end align-top\" scope=\"col\">
                    Note
                    <a href=\"";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.sort", ["champ" => "note", "ordre" => "ASC"]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.sort", ["champ" => "note", "ordre" => "DESC"]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>                    
                </th>
                <th class=\"text-center align-top\" scope=\"col\">
                    Date
                    <a href=\"";
        // line 39
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.sort", ["champ" => "datecreation", "ordre" => "ASC"]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"";
        // line 40
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.sort", ["champ" => "datecreation", "ordre" => "DESC"]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>                    
                </th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["visites"]) || array_key_exists("visites", $context) ? $context["visites"] : (function () { throw new RuntimeError('Variable "visites" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["visite"]) {
            // line 46
            yield "                <tr>
                    <td>
                        <h5 class=\"text-primary\">
                            <a href=\"";
            // line 49
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.showone", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "ville", [], "any", false, false, false, 49), "html", null, true);
            yield "</a>
                        </h5>
                    </td>
                    <td>
                        ";
            // line 53
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "pays", [], "any", false, false, false, 53), "html", null, true);
            yield "
                    </td>
                    <td class=\"text-end\">
                        <strong>
                            ";
            // line 57
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "note", [], "any", false, false, false, 57) < 10)) {
                // line 58
                yield "                                <div class=\"text-danger\">
                                    ";
                // line 59
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "note", [], "any", false, false, false, 59), "html", null, true);
                yield "/20
                                </div>
                            ";
            } else {
                // line 62
                yield "                                <div class=\"text-success\">
                                    ";
                // line 63
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "note", [], "any", false, false, false, 63), "html", null, true);
                yield "/20
                                </div>                  
                            ";
            }
            // line 66
            yield "                        </strong>
                    </td>
                    <td class=\"text-center\">
                        ";
            // line 69
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "datecreationstring", [], "any", false, false, false, 69), "html", null, true);
            yield "
                    </td>                    
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
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
        return "pages/voyages.html.twig";
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
        return array (  209 => 73,  199 => 69,  194 => 66,  188 => 63,  185 => 62,  179 => 59,  176 => 58,  174 => 57,  167 => 53,  158 => 49,  153 => 46,  149 => 45,  141 => 40,  137 => 39,  130 => 35,  126 => 34,  116 => 27,  109 => 23,  105 => 22,  101 => 21,  91 => 14,  84 => 10,  80 => 9,  76 => 8,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"basefront.html.twig\" %}
{% block body %}
    <table class=\"table table-striped\">
        <thead>
            <tr>        
                <th class=\"text-left align-top\" scope=\"col\">
                    Ville
                    <a href=\"{{ path('voyages.sort', {champ:'ville', ordre:'ASC'}) }}\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"{{ path('voyages.sort', {champ:'ville', ordre:'DESC'}) }}\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>                    
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('voyages.findallequal', {champ:'ville'}) }}\">
                        <div class=\"form-group mr-1 mb-2\">
                                
                            <input type=\"text\" class=\"sm\" name=\"recherche\">   
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('filtre_ville') }}\">                    
                            <button type=\"submit\" class=\"btn btn-primary mb-2 btn-sm\">filtrer</button>
                        </div>
                    </form>                    
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    Pays
                    <a href=\"{{ path('voyages.sort', {champ:'pays', ordre:'ASC'}) }}\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"{{ path('voyages.sort', {champ:'pays', ordre:'DESC'}) }}\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>                    
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('voyages.findallequal', {champ:'pays'}) }}\">
                        <div class=\"form-group mr-1 mb-2\">
                            
                            <input type=\"text\" class=\"sm\" name=\"recherche\">  
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('filtre_pays') }}\">                     
                            <button type=\"submit\" class=\"btn btn-primary mb-2 btn-sm\">filtrer</button>
                        </div>
                    </form> 
                </th>
                <th class=\"text-end align-top\" scope=\"col\">
                    Note
                    <a href=\"{{ path('voyages.sort', {champ:'note', ordre:'ASC'}) }}\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"{{ path('voyages.sort', {champ:'note', ordre:'DESC'}) }}\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>                    
                </th>
                <th class=\"text-center align-top\" scope=\"col\">
                    Date
                    <a href=\"{{ path('voyages.sort', {champ:'datecreation', ordre:'ASC'}) }}\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"{{ path('voyages.sort', {champ:'datecreation', ordre:'DESC'}) }}\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>                    
                </th>
            </tr>
        </thead>
        <tbody>
            {% for visite in visites %}
                <tr>
                    <td>
                        <h5 class=\"text-primary\">
                            <a href=\"{{ path('voyages.showone', {id:visite.id}) }}\">{{ visite.ville }}</a>
                        </h5>
                    </td>
                    <td>
                        {{ visite.pays }}
                    </td>
                    <td class=\"text-end\">
                        <strong>
                            {% if visite.note<10 %}
                                <div class=\"text-danger\">
                                    {{ visite.note }}/20
                                </div>
                            {% else %}
                                <div class=\"text-success\">
                                    {{ visite.note }}/20
                                </div>                  
                            {% endif %}
                        </strong>
                    </td>
                    <td class=\"text-center\">
                        {{ visite.datecreationstring }}
                    </td>                    
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "pages/voyages.html.twig", "/opt/homebrew/var/www/mesvoyages0.1/templates/pages/voyages.html.twig");
    }
}
