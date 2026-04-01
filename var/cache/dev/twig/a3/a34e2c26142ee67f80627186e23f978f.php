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

/* _admin.voyage.form.html.twig */
class __TwigTemplate_ca8b8a24b5790c6cb22c7f21ff5091ff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_admin.voyage.form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_admin.voyage.form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 1, $this->source); })()), 'form_start');
        yield "
    <div class=\"row\">
        <div class=\"col\">             
            <div class=\"row\">
                <div class=\"col-auto\">
                    ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 6, $this->source); })()), "datecreation", [], "any", false, false, false, 6), 'row');
        yield "                                                  
                </div>
                <div class=\"col\">
                    ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 9, $this->source); })()), "note", [], "any", false, false, false, 9), 'row');
        yield "
                </div>
                <div class=\"col\">
                    ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 12, $this->source); })()), "tempmin", [], "any", false, false, false, 12), 'row');
        yield "
                </div>
                <div class=\"col\">   
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 15, $this->source); })()), "tempmax", [], "any", false, false, false, 15), 'row');
        yield "
                </div>
            </div>
            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 18, $this->source); })()), "ville", [], "any", false, false, false, 18), 'row');
        yield "
            ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 19, $this->source); })()), "pays", [], "any", false, false, false, 19), 'row');
        yield "
            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 20, $this->source); })()), "environnements", [], "any", false, false, false, 20), 'row');
        yield "
        </div>
        <div class=\"col\">
            <!-- emplacement image -->
            <div>
                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 25, $this->source); })()), "imageFile", [], "any", false, false, false, 25), 'row');
        yield "
            </div>
                <div>
                    Image actuelle
                    ";
        // line 29
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 29, $this->source); })()), "imagename", [], "any", false, false, false, 29)) {
            // line 30
            yield "                        <img src=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "getBasePath", [], "method", false, false, false, 30) . $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 30, $this->source); })()), "imageFile")), "html", null, true);
            yield "\"
                             class=\"card-img-top\" style=\"width:100%;height:auto;\">
                    ";
        } else {
            // line 33
            yield "                        <p>(aucune image)</p>
                    ";
        }
        // line 34
        yield "            
                </div>            
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 40, $this->source); })()), "avis", [], "any", false, false, false, 40), 'row');
        yield "
        </div>
    </div>            
";
        // line 43
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formvisite"]) || array_key_exists("formvisite", $context) ? $context["formvisite"] : (function () { throw new RuntimeError('Variable "formvisite" does not exist.', 43, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_admin.voyage.form.html.twig";
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
        return array (  126 => 43,  120 => 40,  112 => 34,  108 => 33,  101 => 30,  99 => 29,  92 => 25,  84 => 20,  80 => 19,  76 => 18,  70 => 15,  64 => 12,  58 => 9,  52 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(formvisite) }}
    <div class=\"row\">
        <div class=\"col\">             
            <div class=\"row\">
                <div class=\"col-auto\">
                    {{ form_row(formvisite.datecreation) }}                                                  
                </div>
                <div class=\"col\">
                    {{ form_row(formvisite.note) }}
                </div>
                <div class=\"col\">
                    {{ form_row(formvisite.tempmin) }}
                </div>
                <div class=\"col\">   
                    {{ form_row(formvisite.tempmax) }}
                </div>
            </div>
            {{ form_row(formvisite.ville) }}
            {{ form_row(formvisite.pays) }}
            {{ form_row(formvisite.environnements) }}
        </div>
        <div class=\"col\">
            <!-- emplacement image -->
            <div>
                {{ form_row(formvisite.imageFile) }}
            </div>
                <div>
                    Image actuelle
                    {% if visite.imagename %}
                        <img src=\"{{ app.request.getBasePath()~vich_uploader_asset(visite, 'imageFile') }}\"
                             class=\"card-img-top\" style=\"width:100%;height:auto;\">
                    {% else %}
                        <p>(aucune image)</p>
                    {% endif %}            
                </div>            
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            {{ form_row(formvisite.avis) }}
        </div>
    </div>            
{{ form_end(formvisite) }}", "_admin.voyage.form.html.twig", "/opt/homebrew/var/www/mesvoyages0.1/templates/_admin.voyage.form.html.twig");
    }
}
