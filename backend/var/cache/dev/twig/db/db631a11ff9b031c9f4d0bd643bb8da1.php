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

/* @JoseFramework/data_collector/tab/keys/jwk.html.twig */
class __TwigTemplate_31d8235e6baa4ed03a768f9e30abb2c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/keys/jwk.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/keys/jwk.html.twig"));

        // line 1
        yield "<h3>Keys</h3>
<p class=\"help\">
    This table lists all keys registered as service through the bundle configuration
    or the Configuration Helper. <br>
    For each key, it shows the result of the analyze performed on the key.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>Key</th>
        <th>Analyze Result</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 16
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "getData", [], "method", false, false, false, 16), "key", [], "any", false, false, false, 16), "jwk", [], "any", false, false, false, 16))) {
            // line 17
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "getData", [], "method", false, false, false, 17), "key", [], "any", false, false, false, 17), "jwk", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["id"] => $context["data"]) {
                // line 18
                yield "            <tr>
                <td>";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
                yield "</td>
                <td>";
                // line 20
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "jwk", [], "any", false, false, false, 20));
                yield "</td>
                <td>
                    ";
                // line 22
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "analyze", [], "any", false, false, false, 22), "count", [], "method", false, false, false, 22) == 0)) {
                    // line 23
                    yield "                        No message. All good!
                    ";
                } else {
                    // line 25
                    yield "                        <ul>
                            ";
                    // line 26
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "analyze", [], "any", false, false, false, 26));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 27
                        yield "                                <li class=\"severity-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getSeverity", [], "method", false, false, false, 27), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getMessage", [], "method", false, false, false, 27), "html", null, true);
                        yield "</li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    yield "                        </ul>
                    ";
                }
                // line 31
                yield "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "    ";
        } else {
            // line 35
            yield "        <tr>
            <td colspan=\"3\">No registered key</td>
        </tr>
    ";
        }
        // line 39
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
        return "@JoseFramework/data_collector/tab/keys/jwk.html.twig";
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
        return array (  125 => 39,  119 => 35,  116 => 34,  108 => 31,  104 => 29,  93 => 27,  89 => 26,  86 => 25,  82 => 23,  80 => 22,  75 => 20,  71 => 19,  68 => 18,  63 => 17,  61 => 16,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Keys</h3>
<p class=\"help\">
    This table lists all keys registered as service through the bundle configuration
    or the Configuration Helper. <br>
    For each key, it shows the result of the analyze performed on the key.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>Key</th>
        <th>Analyze Result</th>
    </tr>
    </thead>
    <tbody>
    {% if not collector.getData().key.jwk is empty %}
        {% for id, data in collector.getData().key.jwk %}
            <tr>
                <td>{{ id }}</td>
                <td>{{ profiler_dump(data.jwk) }}</td>
                <td>
                    {% if data.analyze.count() == 0 %}
                        No message. All good!
                    {% else %}
                        <ul>
                            {% for message in data.analyze %}
                                <li class=\"severity-{{ message.getSeverity() }}\">{{ message.getMessage() }}</li>
                            {% endfor %}
                        </ul>
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"3\">No registered key</td>
        </tr>
    {% endif %}
    </tbody>
</table>
", "@JoseFramework/data_collector/tab/keys/jwk.html.twig", "C:\\Users\\user\\OneDrive\\Desktop\\finalproject\\finalyearproject\\backend\\vendor\\web-token\\jwt-framework\\src\\Bundle\\Resources\\views\\data_collector\\tab\\keys\\jwk.html.twig");
    }
}
