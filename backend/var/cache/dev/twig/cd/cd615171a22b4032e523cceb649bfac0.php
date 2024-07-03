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

/* @JoseFramework/data_collector/tab/jws/verifiers.html.twig */
class __TwigTemplate_24f685da2eae7a68eb6ffaa83dedd263 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jws/verifiers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jws/verifiers.html.twig"));

        // line 1
        yield "<h3>JWS Verifiers</h3>
<p class=\"help\">
    The following table lists all JWS Verifiers declared as services in your application configuration
    or using the Configuration Helper.<br>
    Verifiers directly created through the JWS Verifier Factory cannot be listed.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>Algorithms</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 15
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 15, $this->source); })()), "getData", [], "method", false, false, false, 15), "jws", [], "any", false, false, false, 15), "jws_builders", [], "any", false, false, false, 15))) {
            // line 16
            yield "        <tr>
            <td colspan=\"2\"><i>No verifier</i></td>
        </tr>
    ";
        } else {
            // line 20
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 20, $this->source); })()), "getData", [], "method", false, false, false, 20), "jws", [], "any", false, false, false, 20), "jws_verifiers", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["id"] => $context["data"]) {
                // line 21
                yield "            <tr>
                <td>";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
                yield "</td>
                <td>
                    <ul>
                        ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "signature_algorithms", [], "any", false, false, false, 25));
                foreach ($context['_seq'] as $context["_key"] => $context["algorithm"]) {
                    // line 26
                    yield "                            <li class=\"";
                    if (CoreExtension::inFilter($context["algorithm"], Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 26, $this->source); })()), "getData", [], "method", false, false, false, 26), "algorithm", [], "any", false, false, false, 26), "messages", [], "any", false, false, false, 26)))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 26, $this->source); })()), "getData", [], "method", false, false, false, 26), "algorithm", [], "any", false, false, false, 26), "messages", [], "any", false, false, false, 26), $context["algorithm"], [], "array", false, false, false, 26), "severity", [], "array", false, false, false, 26), "html", null, true);
                    } else {
                        yield "no-severity";
                    }
                    yield "\">
                                ";
                    // line 27
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["algorithm"], "html", null, true);
                    yield "
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['algorithm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                yield "                    </ul>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "    ";
        }
        // line 35
        yield "    </tbody>
</table>

<h4>Verified Tokens</h4>
<p class=\"help\">
    The following tables list all tokens verified (or not) by the JWS Verifiers.<br>
    Failure reason is related to the key(s) used.
</p>
<table>
    <thead>
    <tr>
        <th scope=\"col\">Status</th>
        <th scope=\"col\">JWS</th>
        <th scope=\"col\">Key set</th>
        <th scope=\"col\" width=\"35%\">Detached Payload (optional)</th>
        <th scope=\"col\">Signature index / Exception</th>
        <th scope=\"col\">Key used for verification</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 55, $this->source); })()), "getData", [], "method", false, false, false, 55), "jws", [], "any", false, false, false, 55), "events", [], "any", false, false, false, 55), "verification_success", [], "any", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 56
            yield "        <tr class=\"status-success\">
            <td>Success</td>
            <td>";
            // line 58
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "seek", ["jws"], "method", false, false, false, 58));
            yield "</td>
            <td>";
            // line 59
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "seek", ["JWKSet"], "method", false, false, false, 59));
            yield "</td>
            <td>";
            // line 60
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["event"], "detachedPayload", [], "any", false, false, false, 60))) {
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "seek", ["detachedPayload"], "method", false, false, false, 60));
            } else {
                // line 61
                yield "                    <i>none</i>";
            }
            yield "</td>
            <td>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "signature", [], "any", false, false, false, 62), "html", null, true);
            yield "</td>
            <td>";
            // line 63
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "seek", ["JWK"], "method", false, false, false, 63));
            yield "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 66, $this->source); })()), "getData", [], "method", false, false, false, 66), "jws", [], "any", false, false, false, 66), "events", [], "any", false, false, false, 66), "verification_failure", [], "any", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 67
            yield "        <tr class=\"status-error\">
            <td>Failure</td>
            <td>";
            // line 69
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "seek", ["jws"], "method", false, false, false, 69));
            yield "</td>
            <td>";
            // line 70
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "seek", ["JWKSet"], "method", false, false, false, 70));
            yield "</td>
            <td>";
            // line 71
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["event"], "detachedPayload", [], "any", false, false, false, 71))) {
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "seek", ["detachedPayload"], "method", false, false, false, 71));
            } else {
                // line 72
                yield "                    <i>none</i>";
            }
            yield "</td>
            <td><i>---</i></td>
            <td><i>---</i></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
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
        return "@JoseFramework/data_collector/tab/jws/verifiers.html.twig";
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
        return array (  209 => 77,  197 => 72,  193 => 71,  189 => 70,  185 => 69,  181 => 67,  176 => 66,  167 => 63,  163 => 62,  158 => 61,  154 => 60,  150 => 59,  146 => 58,  142 => 56,  138 => 55,  116 => 35,  113 => 34,  104 => 30,  95 => 27,  86 => 26,  82 => 25,  76 => 22,  73 => 21,  68 => 20,  62 => 16,  60 => 15,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>JWS Verifiers</h3>
<p class=\"help\">
    The following table lists all JWS Verifiers declared as services in your application configuration
    or using the Configuration Helper.<br>
    Verifiers directly created through the JWS Verifier Factory cannot be listed.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>Algorithms</th>
    </tr>
    </thead>
    <tbody>
    {% if collector.getData().jws.jws_builders is empty %}
        <tr>
            <td colspan=\"2\"><i>No verifier</i></td>
        </tr>
    {% else %}
        {% for id, data in collector.getData().jws.jws_verifiers %}
            <tr>
                <td>{{ id }}</td>
                <td>
                    <ul>
                        {% for algorithm in data.signature_algorithms %}
                            <li class=\"{% if algorithm in collector.getData().algorithm.messages|keys %}{{ collector.getData().algorithm.messages[algorithm]['severity'] }}{% else %}no-severity{% endif %}\">
                                {{ algorithm }}
                            </li>
                        {% endfor %}
                    </ul>
                </td>
            </tr>
        {% endfor %}
    {% endif %}
    </tbody>
</table>

<h4>Verified Tokens</h4>
<p class=\"help\">
    The following tables list all tokens verified (or not) by the JWS Verifiers.<br>
    Failure reason is related to the key(s) used.
</p>
<table>
    <thead>
    <tr>
        <th scope=\"col\">Status</th>
        <th scope=\"col\">JWS</th>
        <th scope=\"col\">Key set</th>
        <th scope=\"col\" width=\"35%\">Detached Payload (optional)</th>
        <th scope=\"col\">Signature index / Exception</th>
        <th scope=\"col\">Key used for verification</th>
    </tr>
    </thead>
    <tbody>
    {% for event in collector.getData().jws.events.verification_success %}
        <tr class=\"status-success\">
            <td>Success</td>
            <td>{{ profiler_dump(event.seek(\"jws\")) }}</td>
            <td>{{ profiler_dump(event.seek(\"JWKSet\")) }}</td>
            <td>{% if not event.detachedPayload is null %}{{ profiler_dump(event.seek(\"detachedPayload\")) }}{% else %}
                    <i>none</i>{% endif %}</td>
            <td>{{ event.signature }}</td>
            <td>{{ profiler_dump(event.seek(\"JWK\")) }}</td>
        </tr>
    {% endfor %}
    {% for event in collector.getData().jws.events.verification_failure %}
        <tr class=\"status-error\">
            <td>Failure</td>
            <td>{{ profiler_dump(event.seek(\"jws\")) }}</td>
            <td>{{ profiler_dump(event.seek(\"JWKSet\")) }}</td>
            <td>{% if not event.detachedPayload is null %}{{ profiler_dump(event.seek(\"detachedPayload\")) }}{% else %}
                    <i>none</i>{% endif %}</td>
            <td><i>---</i></td>
            <td><i>---</i></td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "@JoseFramework/data_collector/tab/jws/verifiers.html.twig", "C:\\Users\\user\\OneDrive\\Desktop\\finalproject\\finalyearproject\\backend\\vendor\\web-token\\jwt-framework\\src\\Bundle\\Resources\\views\\data_collector\\tab\\jws\\verifiers.html.twig");
    }
}
