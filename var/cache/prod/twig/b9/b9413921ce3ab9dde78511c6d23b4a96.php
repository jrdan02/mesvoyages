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

/* @VichUploader/Collector/mapping_collector.html.twig */
class __TwigTemplate_41a53096d6a93ab0c69669f3d303426c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@VichUploader/Collector/mapping_collector.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 5
            yield "        ";
            yield Twig\Extension\CoreExtension::source($this->env, "@VichUploader/Collector/icon.svg");
            yield "
        <span class=\"sf-toolbar-value\">";
            // line 6
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mappingsCount", [], "any", false, false, false, 6), "html", null, true);
            yield "</span>
    ";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        yield "
    ";
        // line 9
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 10
            yield "        <div class=\"sf-toolbar-info-piece\">
            <b>Mappings</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-grey\">";
            // line 12
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mappingsCount", [], "any", false, false, false, 12), "html", null, true);
            yield "</span>
        </div>
    ";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        yield "
    ";
        // line 16
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
        yield "
";
        return; yield '';
    }

    // line 19
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        yield "    ";
        // line 21
        yield "    <span class=\"label\">
        <span class=\"icon\">
            ";
        // line 23
        yield Twig\Extension\CoreExtension::source($this->env, "@VichUploader/Collector/icon.svg");
        yield "
        </span>
        <strong>VichUploader</strong>
    </span>
";
        return; yield '';
    }

    // line 29
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "    <h2>VichUploaderBundle Mappings</h2>
    <table>
        <thead>
            <tr>
                <th scope=\"col\" rowspan=\"2\">Field</th>
                <th scope=\"col\" rowspan=\"2\">Mapping</th>
                <th scope=\"col\" colspan=\"5\" style=\"text-align: center\">Properties</th>
            </tr>
            <tr>
                <th scope=\"col\">Filename</th>
                <th scope=\"col\">Size</th>
                <th scope=\"col\">Mime Type</th>
                <th scope=\"col\">Original Name</th>
                <th scope=\"col\">Dimensions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mappings", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["class"] => $context["data"]) {
            // line 48
            yield "                <tr>
                    <th scope=\"row\" colspan=\"7\">";
            // line 49
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["class"], "html", null, true);
            yield "</th>
                </tr>
                ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["data"]);
            foreach ($context['_seq'] as $context["_key"] => $context["mdata"]) {
                // line 52
                yield "                    <tr>
                        <td>";
                // line 53
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "propertyName", [], "any", false, false, false, 53), "html", null, true);
                yield "</td>
                        <td>";
                // line 54
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "mapping", [], "any", false, false, false, 54), "html", null, true);
                yield "</td>
                        <td>";
                // line 55
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "fileNameProperty", [], "any", true, true, false, 55)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "fileNameProperty", [], "any", false, false, false, 55), "<span class=\"text-danger\">Not Set</span>")) : ("<span class=\"text-danger\">Not Set</span>"));
                yield "</td>
                        <td>";
                // line 56
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "size", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "size", [], "any", false, false, false, 56), "<span class=\"text-danger\">Not Set</span>")) : ("<span class=\"text-danger\">Not Set</span>"));
                yield "</td>
                        <td>";
                // line 57
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "mimeType", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "mimeType", [], "any", false, false, false, 57), "<span class=\"text-danger\">Not Set</span>")) : ("<span class=\"text-danger\">Not Set</span>"));
                yield "</td>
                        <td>";
                // line 58
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "originalName", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "originalName", [], "any", false, false, false, 58), "<span class=\"text-danger\">Not Set</span>")) : ("<span class=\"text-danger\">Not Set</span>"));
                yield "</td>
                        <td>";
                // line 59
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "dimensions", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, $context["mdata"], "dimensions", [], "any", false, false, false, 59), "<span class=\"text-danger\">Not Set</span>")) : ("<span class=\"text-danger\">Not Set</span>"));
                yield "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mdata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['class'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
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
        return "@VichUploader/Collector/mapping_collector.html.twig";
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
        return array (  192 => 63,  186 => 62,  177 => 59,  173 => 58,  169 => 57,  165 => 56,  161 => 55,  157 => 54,  153 => 53,  150 => 52,  146 => 51,  141 => 49,  138 => 48,  134 => 47,  115 => 30,  111 => 29,  101 => 23,  97 => 21,  95 => 20,  91 => 19,  84 => 16,  81 => 15,  75 => 12,  71 => 10,  69 => 9,  66 => 8,  61 => 6,  56 => 5,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@VichUploader/Collector/mapping_collector.html.twig", "/opt/homebrew/var/www/mesvoyages0.1/vendor/vich/uploader-bundle/templates/Collector/mapping_collector.html.twig");
    }
}
