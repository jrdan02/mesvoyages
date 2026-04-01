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
class __TwigTemplate_a484acc45d7786e85054c5f790b3f61c extends Template
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
        $this->parent = $this->loadTemplate("basefront.html.twig", "pages/voyages.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["visites"] ?? null));
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
        return array (  191 => 73,  181 => 69,  176 => 66,  170 => 63,  167 => 62,  161 => 59,  158 => 58,  156 => 57,  149 => 53,  140 => 49,  135 => 46,  131 => 45,  123 => 40,  119 => 39,  112 => 35,  108 => 34,  98 => 27,  91 => 23,  87 => 22,  83 => 21,  73 => 14,  66 => 10,  62 => 9,  58 => 8,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/voyages.html.twig", "/opt/homebrew/var/www/mesvoyages0.1/templates/pages/voyages.html.twig");
    }
}
