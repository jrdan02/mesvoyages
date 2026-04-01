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

/* pages/voyage.html.twig */
class __TwigTemplate_ee261c861ef73be67f6f8457022882ad extends Template
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
        $this->parent = $this->loadTemplate("basefront.html.twig", "pages/voyage.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "    <div class=\"row mt-3\">
        <div class=\"col\">
            <h5> ";
        // line 5
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["visite"] ?? null), "datecreationstring", [], "any", false, false, false, 5), "html", null, true);
        yield "</h5>
            <h1 class=\"text-primary mt-5\">";
        // line 6
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["visite"] ?? null), "ville", [], "any", false, false, false, 6), "html", null, true);
        yield "</h1>
            <h3>";
        // line 7
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["visite"] ?? null), "pays", [], "any", false, false, false, 7), "html", null, true);
        yield "</h3>
            <H
            ";
        // line 9
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["visite"] ?? null), "note", [], "any", false, false, false, 9) >= 10)) {
            // line 10
            yield "                <h2 class=\"text-success mt-5\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["visite"] ?? null), "note", [], "any", false, false, false, 10), "html", null, true);
            yield "/20</h2>
            ";
        } else {
            // line 12
            yield "                <h2 class=\"text-danger mt-5\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["visite"] ?? null), "note", [], "any", false, false, false, 12), "html", null, true);
            yield "/20</h2>
            ";
        }
        // line 14
        yield "            <h5 class=\"mt-5\">t° entre ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["visite"] ?? null), "tempmin", [], "any", false, false, false, 14), "html", null, true);
        yield "° et ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["visite"] ?? null), "tempmax", [], "any", false, false, false, 14), "html", null, true);
        yield "°</h5>      
            <p class=\"mt-5\"><strong>Environnements :</strong></p>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["visite"] ?? null), "environnements", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["environnement"]) {
            // line 17
            yield "                ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["environnement"], "nom", [], "any", false, false, false, 17), "html", null, true);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['environnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "                   
        </div>
        <div class=\"col\">
              ";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["visite"] ?? null), "imageName", [], "any", false, false, false, 21)) {
            // line 22
            yield "        <img src=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 22), "getBasePath", [], "method", false, false, false, 22) . $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(($context["visite"] ?? null), "imageFile")), "html", null, true);
            yield "\"
             class=\"card-img-top\" style=\"width:100px; height:auto;\">
    ";
        } else {
            // line 25
            yield "        <p>(Aucune image trouvée)</p>
    ";
        }
        // line 27
        yield "        </div>
    </div>
    <div class=\"row mt-5\">
        <div class=\"col md-12\">
            <p><strong>mon avis :</strong></p>
            <p>
                ";
        // line 33
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["visite"] ?? null), "avis", [], "any", false, false, false, 33), "html", null, true);
        yield "
            </p>
        </div>
    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/voyage.html.twig";
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
        return array (  129 => 33,  121 => 27,  117 => 25,  110 => 22,  108 => 21,  103 => 18,  94 => 17,  90 => 16,  82 => 14,  76 => 12,  70 => 10,  68 => 9,  63 => 7,  59 => 6,  55 => 5,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/voyage.html.twig", "/opt/homebrew/var/www/mesvoyages0.1/templates/pages/voyage.html.twig");
    }
}
