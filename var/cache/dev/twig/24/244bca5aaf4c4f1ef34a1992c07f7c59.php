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
class __TwigTemplate_41218ef124456646d9db0f1d24622b0e extends Template
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
                <th class=\"text-left align-top\" scope=\"col\">
                 environnements
                    
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.findallequal", ["champ" => "environnement"]);
        yield "\">
                        <div class=\"form-group mr-1 mb-2\">
                            
                            <input type=\"text\" class=\"sm\" name=\"recherche\">  
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 39
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_environnement"), "html", null, true);
        yield "\">                     
                            <button type=\"submit\" class=\"btn btn-primary mb-2 btn-sm\">filtrer</button>
                        </div>
                    </form> 
                    
                </th>
                <th class=\"text-end align-top\" scope=\"col\">
                    Note
                    <a href=\"";
        // line 47
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.sort", ["champ" => "note", "ordre" => "ASC"]), "html", null, true);
        yield "\" 
                    class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"";
        // line 49
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.sort", ["champ" => "note", "ordre" => "DESC"]), "html", null, true);
        yield "\"
                     class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>                    
                </th>
                <th class=\"text-center align-top\" scope=\"col\">
                    Date
                    <a href=\"";
        // line 54
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.sort", ["champ" => "datecreation", "ordre" => "ASC"]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"";
        // line 55
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.sort", ["champ" => "datecreation", "ordre" => "DESC"]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>                    
                </th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["visites"]) || array_key_exists("visites", $context) ? $context["visites"] : (function () { throw new RuntimeError('Variable "visites" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["visite"]) {
            // line 61
            yield "                <tr>
                    <td>
                        <h5 class=\"text-primary\">
                            <a href=\"";
            // line 64
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.showone", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "ville", [], "any", false, false, false, 64), "html", null, true);
            yield "</a>
                        </h5>
                    </td>
                    <td>
                        ";
            // line 68
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "pays", [], "any", false, false, false, 68), "html", null, true);
            yield "
                    </td>
                    <td>
                        ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "environnements", [], "any", false, false, false, 71));
            $context['_iterated'] = false;
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["environnement"]) {
                // line 72
                yield "                            ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["environnement"], "nom", [], "any", false, false, false, 72), "html", null, true);
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 72)) {
                    // line 73
                    yield "                            ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 73) % 3) == 0)) {
                        yield "<br>
                            ";
                    } else {
                        // line 74
                        yield "&nbsp; ";
                    }
                    // line 75
                    yield "                             ";
                }
                yield " 
                            ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 77
                yield "                             - ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['environnement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "                    </td>
                    <td class=\"text-end\">
                        <strong>
                            ";
            // line 81
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "note", [], "any", false, false, false, 81) < 10)) {
                // line 82
                yield "                                <div class=\"text-danger\">
                                    ";
                // line 83
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "note", [], "any", false, false, false, 83), "html", null, true);
                yield "/20
                                </div>
                            ";
            } else {
                // line 86
                yield "                                <div class=\"text-success\">
                                    ";
                // line 87
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "note", [], "any", false, false, false, 87), "html", null, true);
                yield "/20
                                </div>                  
                            ";
            }
            // line 90
            yield "                        </strong>
                    </td>
                    <td class=\"text-center\">
                        ";
            // line 93
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visite"], "datecreationstring", [], "any", false, false, false, 93), "html", null, true);
            yield "
                    </td>                    
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
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
        return array (  287 => 97,  277 => 93,  272 => 90,  266 => 87,  263 => 86,  257 => 83,  254 => 82,  252 => 81,  247 => 78,  241 => 77,  225 => 75,  222 => 74,  216 => 73,  212 => 72,  194 => 71,  188 => 68,  179 => 64,  174 => 61,  170 => 60,  162 => 55,  158 => 54,  150 => 49,  145 => 47,  134 => 39,  127 => 35,  116 => 27,  109 => 23,  105 => 22,  101 => 21,  91 => 14,  84 => 10,  80 => 9,  76 => 8,  69 => 3,  59 => 2,  36 => 1,);
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
                <th class=\"text-left align-top\" scope=\"col\">
                 environnements
                    
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('voyages.findallequal', {champ:'environnement'}) }}\">
                        <div class=\"form-group mr-1 mb-2\">
                            
                            <input type=\"text\" class=\"sm\" name=\"recherche\">  
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('filtre_environnement') }}\">                     
                            <button type=\"submit\" class=\"btn btn-primary mb-2 btn-sm\">filtrer</button>
                        </div>
                    </form> 
                    
                </th>
                <th class=\"text-end align-top\" scope=\"col\">
                    Note
                    <a href=\"{{ path('voyages.sort', {champ:'note', ordre:'ASC'}) }}\" 
                    class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"{{ path('voyages.sort', {champ:'note', ordre:'DESC'}) }}\"
                     class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>                    
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
                    <td>
                        {% for environnement in visite.environnements %}
                            {{ environnement.nom }}{% if not loop.last %}
                            {% if loop.index % 3 == 0 %}<br>
                            {% else %}&nbsp; {% endif %}
                             {% endif %} 
                            {% else %}
                             - {% endfor %}
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
