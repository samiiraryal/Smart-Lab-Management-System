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

/* @JoseFramework/data_collector/tab/header_checker/managers.html.twig */
class __TwigTemplate_f949977becb419f393266ad89d107e4b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/header_checker/managers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/header_checker/managers.html.twig"));

        // line 1
        yield "<h3>Header Checker Managers</h3>
<p class=\"help\">
    The following table lists all Header Checker Managers declared as services in your application configuration
    or using the Configuration Helper.<br>
    Managers directly created through the Header Checker Manager Factory cannot be listed.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>Checked Header Parameters</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 15
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 15, $this->source); })()), "getData", [], "method", false, false, false, 15), "checker", [], "any", false, false, false, 15), "header_checker_managers", [], "any", false, false, false, 15))) {
            // line 16
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "getData", [], "method", false, false, false, 16), "checker", [], "any", false, false, false, 16), "header_checker_managers", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["id"] => $context["data"]) {
                // line 17
                yield "            <tr>
                <td>";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
                yield "</td>
                <td>
                    <ul>
                        ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["data"]);
                foreach ($context['_seq'] as $context["_key"] => $context["checker"]) {
                    // line 22
                    yield "                            <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checker"], "header", [], "any", false, false, false, 22), "html", null, true);
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["checker"], "protected", [], "any", false, false, false, 22)) {
                        yield " (protected header)";
                    }
                    yield "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['checker'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                yield "                    </ul>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "    ";
        } else {
            // line 29
            yield "        <tr>
            <td colspan=\"2\">
                There is no registered Header Checker Manager
            </td>
        </tr>
    ";
        }
        // line 35
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
        return "@JoseFramework/data_collector/tab/header_checker/managers.html.twig";
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
        return array (  112 => 35,  104 => 29,  101 => 28,  92 => 24,  80 => 22,  76 => 21,  70 => 18,  67 => 17,  62 => 16,  60 => 15,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Header Checker Managers</h3>
<p class=\"help\">
    The following table lists all Header Checker Managers declared as services in your application configuration
    or using the Configuration Helper.<br>
    Managers directly created through the Header Checker Manager Factory cannot be listed.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>Checked Header Parameters</th>
    </tr>
    </thead>
    <tbody>
    {% if not collector.getData().checker.header_checker_managers is empty %}
        {% for id, data in collector.getData().checker.header_checker_managers %}
            <tr>
                <td>{{ id }}</td>
                <td>
                    <ul>
                        {% for checker in data %}
                            <li>{{ checker.header }}{% if checker.protected %} (protected header){% endif %}</li>
                        {% endfor %}
                    </ul>
                </td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"2\">
                There is no registered Header Checker Manager
            </td>
        </tr>
    {% endif %}
    </tbody>
</table>
", "@JoseFramework/data_collector/tab/header_checker/managers.html.twig", "C:\\Users\\sandesh\\OneDrive\\Desktop\\finalyearproject\\backend\\vendor\\web-token\\jwt-framework\\src\\Bundle\\Resources\\views\\data_collector\\tab\\header_checker\\managers.html.twig");
    }
}
