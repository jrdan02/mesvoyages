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

/* pages/_email.html.twig */
class __TwigTemplate_f4551e9af9d7773108c96b96f78d5929 extends Template
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
        yield "<!DOCTYPE html>
<html lang=fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>email</title>
    </head>
    <body>
        <p>
            Nom : ";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "nom", [], "any", false, false, false, 9), "html", null, true);
        yield "
        </p>
        <p>
            Email : ";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, false, 12), "html", null, true);
        yield "
        </p>
        <p>
            ";
        // line 15
        yield Twig\Extension\CoreExtension::nl2br(Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "message", [], "any", false, false, false, 15), "html", null, true));
        yield "
        </p>
    </body>
</html>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/_email.html.twig";
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
        return array (  60 => 15,  54 => 12,  48 => 9,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/_email.html.twig", "/opt/homebrew/var/www/mesvoyages0.1/templates/pages/_email.html.twig");
    }
}
