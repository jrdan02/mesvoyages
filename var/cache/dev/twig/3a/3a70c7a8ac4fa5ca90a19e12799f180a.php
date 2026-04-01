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
class __TwigTemplate_80fa3442f97fd1275c2531b6725eea1f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/accueil.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "pages/accueil.html.twig", 1);
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["visites"]) || array_key_exists("visites", $context) ? $context["visites"] : (function () { throw new RuntimeError('Variable "visites" does not exist.', 23, $this->source); })()));
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
                yield Twig\Extension\EscaperExtension::escape($this->env, (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "getBasePath", [], "method", false, false, false, 29) . $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["visite"], "imageFile")), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  179 => 52,  170 => 49,  161 => 47,  157 => 46,  149 => 44,  143 => 42,  137 => 40,  135 => 39,  131 => 38,  124 => 36,  119 => 34,  115 => 32,  108 => 29,  106 => 28,  100 => 24,  96 => 23,  86 => 16,  76 => 9,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"basefront.html.twig\" %}

{% block body %}
<h1>Page d'accueil</h1>
    <p class=\"mt-3\">
        <h3>Bienvenue sur mon site personnel de présentation de mes voyages.</h3>
    </p>
    <p class=\"mt-3\">
        Dans la partie <a href=\"{{ path('voyages') }}\">Voyages</a>, vous pouvez voir la liste des visites que j'ai faites dans différentes villes.<br/>
        A chaque fois j'ai précisé la ville visitée, le pays, j'ai mis une note (entre 0 et 20) et il y a aussi la date de la visite.<br/>
        Vous pouvez trier la liste en fonction des villes, des pays, des notes et des dates, 
        aussi bien dans l'ordre croissant que décroissant.<br/>
        Vous pouvez aussi filtrer les visites par rapport à une ville ou un pays.<br/>
        En cliquant sur la ville de la visite, vous pourrez avoir plus d'informations dessus :<br/>
        températures min et max, une description de la visite, les environnements (montagne, mer, désert...) et une photo.<br/>
        Enfin, vous pouvez me contacter avec le formulaire de <a href=\"{{ path('contact') }}\">Contact</a>.
    </p>
    <p>
        Voici mes 2 derniers voyages :
    </p>
    <table>
        <tr>
            {% for visite in visites %}
                <td style=\"vertical-align: text-top; width: 50%\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <!-- emplacement photo -->
                            {% if visite.imagename %}
                                <img src=\"{{ app.request.getBasePath()~vich_uploader_asset(visite, 'imageFile') }}\" 
                                     class=\"card-img-top\" style=\"width:100%;height:auto;\">
                            {% endif %}
                        </div>
                        <div class=\"col\">
                            <p>{{ visite.datecreationstring }}</p>
                            <h5 class=\"text-primary\">
                                <a href=\"{{ path('voyages.showone', {id:visite.id}) }}\">{{ visite.ville }}</a>
                            </h5>
                            <p>{{ visite.pays }}</p>
                            {% if visite.note>=10 %}
                                <div class=\"text-success\">{{ visite.note }}/20</div>
                            {% else %}
                                <div class=\"text-danger\">{{ visite.note }}/20</div>
                            {% endif %}
                            t° entre {{ visite.tempmin }}° et {{ visite.tempmax }}°<br />
                            <strong>Environnements :</strong><br/>
                            {% for environnement in visite.environnements %}
                                {{ environnement.nom }}
                            {% endfor %}
                        </div>    
                    </div>                    
                </td>
            {% endfor %}    
        </tr>
    </table>
{% endblock %}", "pages/accueil.html.twig", "/opt/homebrew/var/www/mesvoyages0.1/templates/pages/accueil.html.twig");
    }
}
