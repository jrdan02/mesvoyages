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
class __TwigTemplate_2027d9a21932bd0ebddda6de26cd1038 extends Template
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
        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formvisite"] ?? null), 'form_start');
        yield "
    <div class=\"row\">
        <div class=\"col\">             
            <div class=\"row\">
                <div class=\"col-auto\">
                    ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["formvisite"] ?? null), "datecreation", [], "any", false, false, false, 6), 'row');
        yield "                                                  
                </div>
                <div class=\"col\">
                    ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["formvisite"] ?? null), "note", [], "any", false, false, false, 9), 'row');
        yield "
                </div>
                <div class=\"col\">
                    ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["formvisite"] ?? null), "tempmin", [], "any", false, false, false, 12), 'row');
        yield "
                </div>
                <div class=\"col\">
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["formvisite"] ?? null), "tempmax", [], "any", false, false, false, 15), 'row');
        yield "
                </div>
            </div>
            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["formvisite"] ?? null), "ville", [], "any", false, false, false, 18), 'row');
        yield "
            ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["formvisite"] ?? null), "pays", [], "any", false, false, false, 19), 'row');
        yield "
            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["formvisite"] ?? null), "environnements", [], "any", false, false, false, 20), 'row');
        yield "
        </div>  
        <div class=\"col\">
             ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["formvisite"] ?? null), "imageFile", [], "any", false, false, false, 23), 'row');
        yield "
        </div>
       <div>
    ";
        // line 26
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["visite"] ?? null), "imageName", [], "any", false, false, false, 26)) {
            // line 27
            yield "        <img src=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 27), "getBasePath", [], "method", false, false, false, 27) . $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(($context["visite"] ?? null), "imageFile")), "html", null, true);
            yield "\"
             class=\"card-img-top\" style=\"width:100px; height:auto;\">
    ";
        } else {
            // line 30
            yield "        <p>(Aucune image trouvée)</p>
    ";
        }
        // line 32
        yield "</div>

    </div>

    <div class=\"row\">
        <div class=\"col\">
            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["formvisite"] ?? null), "avis", [], "any", false, false, false, 38), 'row');
        yield "
        </div>
    </div>            
";
        // line 41
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formvisite"] ?? null), 'form_end');
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
        return array (  117 => 41,  111 => 38,  103 => 32,  99 => 30,  92 => 27,  90 => 26,  84 => 23,  78 => 20,  74 => 19,  70 => 18,  64 => 15,  58 => 12,  52 => 9,  46 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_admin.voyage.form.html.twig", "/opt/homebrew/var/www/mesvoyages0.1/templates/_admin.voyage.form.html.twig");
    }
}
