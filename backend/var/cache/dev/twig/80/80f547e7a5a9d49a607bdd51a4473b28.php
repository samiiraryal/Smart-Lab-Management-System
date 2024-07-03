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

/* @JoseFramework/data_collector/tab/header_checker/checkers.html.twig */
class __TwigTemplate_aeff023f0131c7cae0c8484a71a18b8a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/header_checker/checkers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/header_checker/checkers.html.twig"));

        // line 1
        yield "<h3>Available Header Checkers</h3>
<p class=\"help\">
    Each Header Checker will check a specific header parameter.<br>
    Please note that the header \"crit\" (critical) is always checked.
</p>
<table>
    <thead>
    <tr>
        <th>Alias</th>
        <th>Checked header</th>
        <th>Is protected?</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 15
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 15, $this->source); })()), "getData", [], "method", false, false, false, 15), "checker", [], "any", false, false, false, 15), "header_checkers", [], "any", false, false, false, 15))) {
            // line 16
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "getData", [], "method", false, false, false, 16), "checker", [], "any", false, false, false, 16), "header_checkers", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["alias"] => $context["data"]) {
                // line 17
                yield "            <tr>
                <td>";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["alias"], "html", null, true);
                yield "</td>
                <td>";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "header", [], "any", false, false, false, 19), "html", null, true);
                yield "</td>
                <td>";
                // line 20
                if (CoreExtension::getAttribute($this->env, $this->source, $context["data"], "protected", [], "any", false, false, false, 20)) {
                    yield "Yes";
                } else {
                    yield "No";
                }
                yield "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "    ";
        } else {
            // line 24
            yield "        <tr>
            <td colspan=\"3\">There is no registered header checker</td>
        </tr>
    ";
        }
        // line 28
        yield "    </tbody>
</table>

<h4>Checked Headers</h4>
<p class=\"help\">
    The following table list all header parameters checked by the Header Checker Managers.
</p>
<table>
    <thead>
    <tr>
        <th scope=\"col\">Status</th>
        <th scope=\"col\">Token</th>
        <th scope=\"col\">Signature / Recipient Index</th>
        <th scope=\"col\">Mandatory Parameters</th>
        <th scope=\"col\">Error</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 46
        if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 46, $this->source); })()), "getData", [], "method", false, false, false, 46), "checker", [], "any", false, false, false, 46), "events", [], "any", false, false, false, 46), "header_check_success", [], "any", false, false, false, 46)) ||  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 46, $this->source); })()), "getData", [], "method", false, false, false, 46), "checker", [], "any", false, false, false, 46), "events", [], "any", false, false, false, 46), "header_check_failure", [], "any", false, false, false, 46)))) {
            // line 47
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 47, $this->source); })()), "getData", [], "method", false, false, false, 47), "checker", [], "any", false, false, false, 47), "events", [], "any", false, false, false, 47), "header_check_success", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 48
                yield "            <tr class=\"status-success\">
                <td>Success</td>
                <td>";
                // line 50
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "seek", ["jwt"], "method", false, false, false, 50));
                yield "</td>
                <td>";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "seek", ["index"], "method", false, false, false, 51), "html", null, true);
                yield "</td>
                <td>";
                // line 52
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "mandatoryHeaderParameters", [], "any", false, false, false, 52));
                yield "</td>
                <td>---</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 56, $this->source); })()), "getData", [], "method", false, false, false, 56), "checker", [], "any", false, false, false, 56), "events", [], "any", false, false, false, 56), "header_check_failure", [], "any", false, false, false, 56));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 57
                yield "            <tr class=\"status-error\">
                <td>Failure</td>
                <td>";
                // line 59
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "seek", ["jwt"], "method", false, false, false, 59));
                yield "</td>
                <td>";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "seek", ["index"], "method", false, false, false, 60), "html", null, true);
                yield "</td>
                <td>";
                // line 61
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "mandatoryHeaderParameters", [], "any", false, false, false, 61));
                yield "</td>
                <td>";
                // line 62
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "seek", ["throwable"], "method", false, false, false, 62));
                yield "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            yield "    ";
        } else {
            // line 66
            yield "        <tr>
            <td colspan=\"1\">No checked header parameters</td>
        </tr>
    ";
        }
        // line 70
        yield "    </tbody>
</table>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@JoseFramework/data_collector/tab/header_checker/checkers.html.twig";
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
        return array (  188 => 70,  182 => 66,  179 => 65,  170 => 62,  166 => 61,  162 => 60,  158 => 59,  154 => 57,  149 => 56,  139 => 52,  135 => 51,  131 => 50,  127 => 48,  122 => 47,  120 => 46,  100 => 28,  94 => 24,  91 => 23,  78 => 20,  74 => 19,  70 => 18,  67 => 17,  62 => 16,  60 => 15,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Available Header Checkers</h3>
<p class=\"help\">
    Each Header Checker will check a specific header parameter.<br>
    Please note that the header \"crit\" (critical) is always checked.
</p>
<table>
    <thead>
    <tr>
        <th>Alias</th>
        <th>Checked header</th>
        <th>Is protected?</th>
    </tr>
    </thead>
    <tbody>
    {% if not collector.getData().checker.header_checkers is empty %}
        {% for alias, data in collector.getData().checker.header_checkers %}
            <tr>
                <td>{{ alias }}</td>
                <td>{{ data.header }}</td>
                <td>{% if data.protected %}Yes{% else %}No{% endif %}</td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"3\">There is no registered header checker</td>
        </tr>
    {% endif %}
    </tbody>
</table>

<h4>Checked Headers</h4>
<p class=\"help\">
    The following table list all header parameters checked by the Header Checker Managers.
</p>
<table>
    <thead>
    <tr>
        <th scope=\"col\">Status</th>
        <th scope=\"col\">Token</th>
        <th scope=\"col\">Signature / Recipient Index</th>
        <th scope=\"col\">Mandatory Parameters</th>
        <th scope=\"col\">Error</th>
    </tr>
    </thead>
    <tbody>
    {% if not collector.getData().checker.events.header_check_success is empty or not collector.getData().checker.events.header_check_failure is empty %}
        {% for event in collector.getData().checker.events.header_check_success %}
            <tr class=\"status-success\">
                <td>Success</td>
                <td>{{ profiler_dump(event.seek(\"jwt\")) }}</td>
                <td>{{ event.seek(\"index\") }}</td>
                <td>{{ profiler_dump(event.mandatoryHeaderParameters) }}</td>
                <td>---</td>
            </tr>
        {% endfor %}
        {% for event in collector.getData().checker.events.header_check_failure %}
            <tr class=\"status-error\">
                <td>Failure</td>
                <td>{{ profiler_dump(event.seek(\"jwt\")) }}</td>
                <td>{{ event.seek(\"index\") }}</td>
                <td>{{ profiler_dump(event.mandatoryHeaderParameters) }}</td>
                <td>{{ profiler_dump(event.seek(\"throwable\")) }}</td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"1\">No checked header parameters</td>
        </tr>
    {% endif %}
    </tbody>
</table>
", "@JoseFramework/data_collector/tab/header_checker/checkers.html.twig", "C:\\Users\\user\\OneDrive\\Desktop\\finalproject\\finalyearproject\\backend\\vendor\\web-token\\jwt-framework\\src\\Bundle\\Resources\\views\\data_collector\\tab\\header_checker\\checkers.html.twig");
    }
}
