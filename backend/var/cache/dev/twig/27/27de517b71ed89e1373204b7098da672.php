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

/* @JoseFramework/data_collector/tab/keys/jwkset.html.twig */
class __TwigTemplate_50aec77d63b0e8d7ce3c40226aaec52d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/keys/jwkset.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/keys/jwkset.html.twig"));

        // line 1
        yield "<h3>Key Sets</h3>
<p class=\"help\">
    This table lists all key sets registered as service through the bundle configuration
    or the Configuration Helper. <br>
    For each key in the key sets, it shows the result of the analyze performed on that key.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>keys</th>
        <th>Analyze Result</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 16
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "getData", [], "method", false, false, false, 16), "key", [], "any", false, false, false, 16), "jwkset", [], "any", false, false, false, 16))) {
            // line 17
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "getData", [], "method", false, false, false, 17), "key", [], "any", false, false, false, 17), "jwkset", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["id"] => $context["data"]) {
                // line 18
                yield "            <tr>
                <td>";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
                yield "</td>
                <td>";
                // line 20
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "jwkset", [], "any", false, false, false, 20));
                yield "</td>
                <td>
                    ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "analyze_jwkset", [], "any", false, false, false, 22));
                foreach ($context['_seq'] as $context["kid"] => $context["messages"]) {
                    // line 23
                    yield "                        <h5>Key set:</h5>
                        <ul>
                            ";
                    // line 25
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["messages"]) == 0)) {
                        // line 26
                        yield "                                <li>No message. All good!</li>
                            ";
                    } else {
                        // line 28
                        yield "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                            // line 29
                            yield "                                    <li class=\"severity-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getSeverity", [], "method", false, false, false, 29), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getMessage", [], "method", false, false, false, 29), "html", null, true);
                            yield "</li>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 31
                        yield "                            ";
                    }
                    // line 32
                    yield "                        </ul>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['kid'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                yield "                    <hr>
                    ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "analyze", [], "any", false, false, false, 35));
                foreach ($context['_seq'] as $context["kid"] => $context["messages"]) {
                    // line 36
                    yield "                        <h5>Key index / Key ID \"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["kid"], "html", null, true);
                    yield "\":</h5>
                        <ul>
                            ";
                    // line 38
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["messages"]) == 0)) {
                        // line 39
                        yield "                                <li>No message. All good!</li>
                            ";
                    } else {
                        // line 41
                        yield "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                            // line 42
                            yield "                                    <li class=\"severity-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getSeverity", [], "method", false, false, false, 42), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getMessage", [], "method", false, false, false, 42), "html", null, true);
                            yield "</li>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 44
                        yield "                            ";
                    }
                    // line 45
                    yield "                        </ul>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['kid'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                yield "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "    ";
        } else {
            // line 51
            yield "        <tr>
            <td colspan=\"3\">No registered key set</td>
        </tr>
    ";
        }
        // line 55
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
        return "@JoseFramework/data_collector/tab/keys/jwkset.html.twig";
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
        return array (  182 => 55,  176 => 51,  173 => 50,  165 => 47,  158 => 45,  155 => 44,  144 => 42,  139 => 41,  135 => 39,  133 => 38,  127 => 36,  123 => 35,  120 => 34,  113 => 32,  110 => 31,  99 => 29,  94 => 28,  90 => 26,  88 => 25,  84 => 23,  80 => 22,  75 => 20,  71 => 19,  68 => 18,  63 => 17,  61 => 16,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Key Sets</h3>
<p class=\"help\">
    This table lists all key sets registered as service through the bundle configuration
    or the Configuration Helper. <br>
    For each key in the key sets, it shows the result of the analyze performed on that key.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>keys</th>
        <th>Analyze Result</th>
    </tr>
    </thead>
    <tbody>
    {% if not collector.getData().key.jwkset is empty %}
        {% for id, data in collector.getData().key.jwkset %}
            <tr>
                <td>{{ id }}</td>
                <td>{{ profiler_dump(data.jwkset) }}</td>
                <td>
                    {% for kid, messages in data.analyze_jwkset %}
                        <h5>Key set:</h5>
                        <ul>
                            {% if messages|length == 0 %}
                                <li>No message. All good!</li>
                            {% else %}
                                {% for message in messages %}
                                    <li class=\"severity-{{ message.getSeverity() }}\">{{ message.getMessage() }}</li>
                                {% endfor %}
                            {% endif %}
                        </ul>
                    {% endfor %}
                    <hr>
                    {% for kid, messages in data.analyze %}
                        <h5>Key index / Key ID \"{{ kid }}\":</h5>
                        <ul>
                            {% if messages|length == 0 %}
                                <li>No message. All good!</li>
                            {% else %}
                                {% for message in messages %}
                                    <li class=\"severity-{{ message.getSeverity() }}\">{{ message.getMessage() }}</li>
                                {% endfor %}
                            {% endif %}
                        </ul>
                    {% endfor %}
                </td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"3\">No registered key set</td>
        </tr>
    {% endif %}
    </tbody>
</table>
", "@JoseFramework/data_collector/tab/keys/jwkset.html.twig", "C:\\Users\\user\\OneDrive\\Desktop\\finalproject\\finalyearproject\\backend\\vendor\\web-token\\jwt-framework\\src\\Bundle\\Resources\\views\\data_collector\\tab\\keys\\jwkset.html.twig");
    }
}
