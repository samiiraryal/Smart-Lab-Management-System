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

/* @JoseFramework/data_collector/tab/jwe/decrypters.html.twig */
class __TwigTemplate_34d708995e1b581f86ee3137c7d2d075 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jwe/decrypters.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jwe/decrypters.html.twig"));

        // line 1
        yield "<h3>JWE Decrypters</h3>
<p class=\"help\">
    The following table lists all JWE Decrypters declared as services in your application configuration
    or using the Configuration Helper.<br>
    Decrypters directly created through the JWE Decrypter Factory cannot be listed.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>Key Encryption Algorithms</th>
        <th>Content Encryption Algorithms</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 16
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "getData", [], "method", false, false, false, 16), "jwe", [], "any", false, false, false, 16), "jwe_decrypters", [], "any", false, false, false, 16))) {
            // line 17
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "getData", [], "method", false, false, false, 17), "jwe", [], "any", false, false, false, 17), "jwe_decrypters", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["id"] => $context["data"]) {
                // line 18
                yield "            <tr>
                <td>";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
                yield "</td>
                <td>
                    <ul>
                        ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "key_encryption_algorithms", [], "any", false, false, false, 22));
                foreach ($context['_seq'] as $context["_key"] => $context["algorithm"]) {
                    // line 23
                    yield "                            <li class=\"";
                    if (CoreExtension::inFilter($context["algorithm"], Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 23, $this->source); })()), "getData", [], "method", false, false, false, 23), "algorithm", [], "any", false, false, false, 23), "messages", [], "any", false, false, false, 23)))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 23, $this->source); })()), "getData", [], "method", false, false, false, 23), "algorithm", [], "any", false, false, false, 23), "messages", [], "any", false, false, false, 23), $context["algorithm"], [], "array", false, false, false, 23), "severity", [], "array", false, false, false, 23), "html", null, true);
                    } else {
                        yield "no-severity";
                    }
                    yield "\">
                                ";
                    // line 24
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["algorithm"], "html", null, true);
                    yield "
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['algorithm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                yield "                    </ul>
                </td>
                <td>
                    <ul>
                        ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "content_encryption_algorithms", [], "any", false, false, false, 31));
                foreach ($context['_seq'] as $context["_key"] => $context["algorithm"]) {
                    // line 32
                    yield "                            <li class=\"";
                    if (CoreExtension::inFilter($context["algorithm"], Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 32, $this->source); })()), "getData", [], "method", false, false, false, 32), "algorithm", [], "any", false, false, false, 32), "messages", [], "any", false, false, false, 32)))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 32, $this->source); })()), "getData", [], "method", false, false, false, 32), "algorithm", [], "any", false, false, false, 32), "messages", [], "any", false, false, false, 32), $context["algorithm"], [], "array", false, false, false, 32), "severity", [], "array", false, false, false, 32), "html", null, true);
                    } else {
                        yield "no-severity";
                    }
                    yield "\">
                                ";
                    // line 33
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["algorithm"], "html", null, true);
                    yield "
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['algorithm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                yield "                    </ul>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "    ";
        } else {
            // line 41
            yield "        <tr>
            <td colspan=\"4\">There is no JWE Decrypter</td>
        </tr>
    ";
        }
        // line 45
        yield "    </tbody>
</table>

<h4>Decrypted Tokens</h4>
<p class=\"help\">
    The following tables list all tokens decrypted (or not) by the JWE Decrypters.<br>
    Failure reason is related to the key(s) used.
</p>
<table>
    <thead>
    <tr>
        <th scope=\"col\">Status</th>
        <th scope=\"col\">JWE</th>
        <th scope=\"col\">Key set</th>
        <th scope=\"col\">Recipient index / Exception</th>
        <th scope=\"col\">Key used for decryption</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 64, $this->source); })()), "getData", [], "method", false, false, false, 64), "jwe", [], "any", false, false, false, 64), "events", [], "any", false, false, false, 64), "decryption_success", [], "any", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 65
            yield "        <tr class=\"status-success\">
            <td>Success</td>
            <td>";
            // line 67
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "seek", ["jwe"], "method", false, false, false, 67));
            yield "</td>
            <td>";
            // line 68
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "seek", ["JWKSet"], "method", false, false, false, 68));
            yield "</td>
            <td>";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "recipient", [], "any", false, false, false, 69), "html", null, true);
            yield "</td>
            <td>";
            // line 70
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "seek", ["JWK"], "method", false, false, false, 70));
            yield "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 73, $this->source); })()), "getData", [], "method", false, false, false, 73), "jwe", [], "any", false, false, false, 73), "events", [], "any", false, false, false, 73), "decryption_failure", [], "any", false, false, false, 73));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 74
            yield "        <tr class=\"status-error\">
            <td>Failure</td>
            <td>";
            // line 76
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "seek", ["jwe"], "method", false, false, false, 76));
            yield "</td>
            <td>";
            // line 77
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "seek", ["JWKSet"], "method", false, false, false, 77));
            yield "</td>
            <td><i>---</i></td>
            <td><i>---</i></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
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
        return "@JoseFramework/data_collector/tab/jwe/decrypters.html.twig";
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
        return array (  219 => 82,  208 => 77,  204 => 76,  200 => 74,  195 => 73,  186 => 70,  182 => 69,  178 => 68,  174 => 67,  170 => 65,  166 => 64,  145 => 45,  139 => 41,  136 => 40,  127 => 36,  118 => 33,  109 => 32,  105 => 31,  99 => 27,  90 => 24,  81 => 23,  77 => 22,  71 => 19,  68 => 18,  63 => 17,  61 => 16,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>JWE Decrypters</h3>
<p class=\"help\">
    The following table lists all JWE Decrypters declared as services in your application configuration
    or using the Configuration Helper.<br>
    Decrypters directly created through the JWE Decrypter Factory cannot be listed.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>Key Encryption Algorithms</th>
        <th>Content Encryption Algorithms</th>
    </tr>
    </thead>
    <tbody>
    {% if not collector.getData().jwe.jwe_decrypters is empty %}
        {% for id, data in collector.getData().jwe.jwe_decrypters %}
            <tr>
                <td>{{ id }}</td>
                <td>
                    <ul>
                        {% for algorithm in data.key_encryption_algorithms %}
                            <li class=\"{% if algorithm in collector.getData().algorithm.messages|keys %}{{ collector.getData().algorithm.messages[algorithm]['severity'] }}{% else %}no-severity{% endif %}\">
                                {{ algorithm }}
                            </li>
                        {% endfor %}
                    </ul>
                </td>
                <td>
                    <ul>
                        {% for algorithm in data.content_encryption_algorithms %}
                            <li class=\"{% if algorithm in collector.getData().algorithm.messages|keys %}{{ collector.getData().algorithm.messages[algorithm]['severity'] }}{% else %}no-severity{% endif %}\">
                                {{ algorithm }}
                            </li>
                        {% endfor %}
                    </ul>
                </td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"4\">There is no JWE Decrypter</td>
        </tr>
    {% endif %}
    </tbody>
</table>

<h4>Decrypted Tokens</h4>
<p class=\"help\">
    The following tables list all tokens decrypted (or not) by the JWE Decrypters.<br>
    Failure reason is related to the key(s) used.
</p>
<table>
    <thead>
    <tr>
        <th scope=\"col\">Status</th>
        <th scope=\"col\">JWE</th>
        <th scope=\"col\">Key set</th>
        <th scope=\"col\">Recipient index / Exception</th>
        <th scope=\"col\">Key used for decryption</th>
    </tr>
    </thead>
    <tbody>
    {% for event in collector.getData().jwe.events.decryption_success %}
        <tr class=\"status-success\">
            <td>Success</td>
            <td>{{ profiler_dump(event.seek(\"jwe\")) }}</td>
            <td>{{ profiler_dump(event.seek(\"JWKSet\")) }}</td>
            <td>{{ event.recipient }}</td>
            <td>{{ profiler_dump(event.seek(\"JWK\")) }}</td>
        </tr>
    {% endfor %}
    {% for event in collector.getData().jwe.events.decryption_failure %}
        <tr class=\"status-error\">
            <td>Failure</td>
            <td>{{ profiler_dump(event.seek(\"jwe\")) }}</td>
            <td>{{ profiler_dump(event.seek(\"JWKSet\")) }}</td>
            <td><i>---</i></td>
            <td><i>---</i></td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "@JoseFramework/data_collector/tab/jwe/decrypters.html.twig", "C:\\Users\\sandesh\\OneDrive\\Desktop\\finalyearproject\\backend\\vendor\\web-token\\jwt-framework\\src\\Bundle\\Resources\\views\\data_collector\\tab\\jwe\\decrypters.html.twig");
    }
}
