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

/* @JoseFramework/data_collector/tab/jwe.html.twig */
class __TwigTemplate_240a500115c0270065438750354f6331 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jwe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jwe.html.twig"));

        // line 1
        yield "<div class=\"tab\">
    <h2 class=\"tab-title\">JWE</h2>
    <div class=\"tab-content\">
        ";
        // line 4
        yield from         $this->loadTemplate("@JoseFramework/data_collector/tab/jwe/builders.html.twig", "@JoseFramework/data_collector/tab/jwe.html.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "        ";
        yield from         $this->loadTemplate("@JoseFramework/data_collector/tab/jwe/decrypters.html.twig", "@JoseFramework/data_collector/tab/jwe.html.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "        ";
        yield from         $this->loadTemplate("@JoseFramework/data_collector/tab/jwe/loaders.html.twig", "@JoseFramework/data_collector/tab/jwe.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "        ";
        yield from         $this->loadTemplate("@JoseFramework/data_collector/tab/jwe/key_encryption_algorithms.html.twig", "@JoseFramework/data_collector/tab/jwe.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "        ";
        yield from         $this->loadTemplate("@JoseFramework/data_collector/tab/jwe/content_encryption_algorithms.html.twig", "@JoseFramework/data_collector/tab/jwe.html.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "        ";
        yield from         $this->loadTemplate("@JoseFramework/data_collector/tab/jwe/compression_methods.html.twig", "@JoseFramework/data_collector/tab/jwe.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "        ";
        yield from         $this->loadTemplate("@JoseFramework/data_collector/tab/jwe/serialization_modes.html.twig", "@JoseFramework/data_collector/tab/jwe.html.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "    </div>
</div>
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
        return "@JoseFramework/data_collector/tab/jwe.html.twig";
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
        return array (  69 => 11,  66 => 10,  63 => 9,  60 => 8,  57 => 7,  54 => 6,  51 => 5,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tab\">
    <h2 class=\"tab-title\">JWE</h2>
    <div class=\"tab-content\">
        {% include '@JoseFramework/data_collector/tab/jwe/builders.html.twig' %}
        {% include '@JoseFramework/data_collector/tab/jwe/decrypters.html.twig' %}
        {% include '@JoseFramework/data_collector/tab/jwe/loaders.html.twig' %}
        {% include '@JoseFramework/data_collector/tab/jwe/key_encryption_algorithms.html.twig' %}
        {% include '@JoseFramework/data_collector/tab/jwe/content_encryption_algorithms.html.twig' %}
        {% include '@JoseFramework/data_collector/tab/jwe/compression_methods.html.twig' %}
        {% include '@JoseFramework/data_collector/tab/jwe/serialization_modes.html.twig' %}
    </div>
</div>
", "@JoseFramework/data_collector/tab/jwe.html.twig", "C:\\Users\\user\\OneDrive\\Desktop\\finalproject\\finalyearproject\\backend\\vendor\\web-token\\jwt-framework\\src\\Bundle\\Resources\\views\\data_collector\\tab\\jwe.html.twig");
    }
}
