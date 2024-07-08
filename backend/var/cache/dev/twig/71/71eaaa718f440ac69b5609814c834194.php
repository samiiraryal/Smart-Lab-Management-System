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

/* @JoseFramework/data_collector/tab/jws/signature_algorithms.html.twig */
class __TwigTemplate_5c25ffa29adb4091b4e99335b1b9b490 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jws/signature_algorithms.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jws/signature_algorithms.html.twig"));

        // line 1
        yield "<h3>Available Signature Algorithms</h3>
<p class=\"help\">
    The following table lists all signature algorithms available in this environment.
</p>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Alias</th>
        <th>Message</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 14
        $context["signatureAlgorithms"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 14, $this->source); })()), "getData", [], "method", false, false, false, 14), "algorithm", [], "any", false, false, false, 14), "algorithms", [], "any", false, false, false, 14);
        // line 15
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["signatureAlgorithms"] ?? null), "Signature", [], "array", true, true, false, 15)) {
            // line 16
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["signatureAlgorithms"]) || array_key_exists("signatureAlgorithms", $context) ? $context["signatureAlgorithms"] : (function () { throw new RuntimeError('Variable "signatureAlgorithms" does not exist.', 16, $this->source); })()), "Signature", [], "array", false, false, false, 16));
            foreach ($context['_seq'] as $context["alias"] => $context["alg"]) {
                // line 17
                yield "            <tr class=\"";
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["alg"], "name", [], "any", false, false, false, 17), Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "getData", [], "method", false, false, false, 17), "algorithm", [], "any", false, false, false, 17), "messages", [], "any", false, false, false, 17)))) {
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "getData", [], "method", false, false, false, 17), "algorithm", [], "any", false, false, false, 17), "messages", [], "any", false, false, false, 17), CoreExtension::getAttribute($this->env, $this->source, $context["alg"], "name", [], "any", false, false, false, 17), [], "array", false, false, false, 17), "severity", [], "array", false, false, false, 17);
                } else {
                    yield "no-severity";
                }
                yield "\">
                <td>";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alg"], "name", [], "any", false, false, false, 18), "html", null, true);
                yield "</td>
                <td>";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["alias"], "html", null, true);
                yield "</td>
                <td>
                    ";
                // line 21
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["alg"], "name", [], "any", false, false, false, 21), Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "getData", [], "method", false, false, false, 21), "algorithm", [], "any", false, false, false, 21), "messages", [], "any", false, false, false, 21)))) {
                    // line 22
                    yield "                        ";
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 22, $this->source); })()), "getData", [], "method", false, false, false, 22), "algorithm", [], "any", false, false, false, 22), "messages", [], "any", false, false, false, 22), CoreExtension::getAttribute($this->env, $this->source, $context["alg"], "name", [], "any", false, false, false, 22), [], "array", false, false, false, 22), "message", [], "array", false, false, false, 22);
                    yield "
                    ";
                }
                // line 24
                yield "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['alg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "    ";
        } else {
            // line 28
            yield "        <tr>
            <td colspan=\"3\">There is no signature algorithm. Did you install a package providing signature algorithms?
            </td>
        </tr>
    ";
        }
        // line 33
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
        return "@JoseFramework/data_collector/tab/jws/signature_algorithms.html.twig";
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
        return array (  113 => 33,  106 => 28,  103 => 27,  95 => 24,  89 => 22,  87 => 21,  82 => 19,  78 => 18,  69 => 17,  64 => 16,  61 => 15,  59 => 14,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Available Signature Algorithms</h3>
<p class=\"help\">
    The following table lists all signature algorithms available in this environment.
</p>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Alias</th>
        <th>Message</th>
    </tr>
    </thead>
    <tbody>
    {% set signatureAlgorithms = collector.getData().algorithm.algorithms %}
    {% if signatureAlgorithms['Signature'] is defined %}
        {% for alias, alg in signatureAlgorithms['Signature'] %}
            <tr class=\"{% if alg.name in collector.getData().algorithm.messages|keys %}{{ collector.getData().algorithm.messages[alg.name]['severity']|raw }}{% else %}no-severity{% endif %}\">
                <td>{{ alg.name }}</td>
                <td>{{ alias }}</td>
                <td>
                    {% if alg.name in collector.getData().algorithm.messages|keys %}
                        {{ collector.getData().algorithm.messages[alg.name]['message']|raw }}
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"3\">There is no signature algorithm. Did you install a package providing signature algorithms?
            </td>
        </tr>
    {% endif %}
    </tbody>
</table>
", "@JoseFramework/data_collector/tab/jws/signature_algorithms.html.twig", "C:\\Users\\sandesh\\OneDrive\\Desktop\\finalyearproject\\backend\\vendor\\web-token\\jwt-framework\\src\\Bundle\\Resources\\views\\data_collector\\tab\\jws\\signature_algorithms.html.twig");
    }
}
