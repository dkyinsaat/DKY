<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_1468e989476b83e549d057b3f295593c4e0b7cc4d96cd6fbfebd41dc00c651ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9a46b9d6a544407a67b698dc8c023103eed96a3e2b7963c4a7588011e7f273a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a46b9d6a544407a67b698dc8c023103eed96a3e2b7963c4a7588011e7f273a->enter($__internal_f9a46b9d6a544407a67b698dc8c023103eed96a3e2b7963c4a7588011e7f273a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_173076a1f25556543e24d2b65942ce4475312486c178a0be3603e3814374b65c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173076a1f25556543e24d2b65942ce4475312486c178a0be3603e3814374b65c->enter($__internal_173076a1f25556543e24d2b65942ce4475312486c178a0be3603e3814374b65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9a46b9d6a544407a67b698dc8c023103eed96a3e2b7963c4a7588011e7f273a->leave($__internal_f9a46b9d6a544407a67b698dc8c023103eed96a3e2b7963c4a7588011e7f273a_prof);

        
        $__internal_173076a1f25556543e24d2b65942ce4475312486c178a0be3603e3814374b65c->leave($__internal_173076a1f25556543e24d2b65942ce4475312486c178a0be3603e3814374b65c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a70a85659489aa704444eb665eeb48e4db7a11ca9a86d8b96336ea2a3799a3ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a70a85659489aa704444eb665eeb48e4db7a11ca9a86d8b96336ea2a3799a3ce->enter($__internal_a70a85659489aa704444eb665eeb48e4db7a11ca9a86d8b96336ea2a3799a3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_acd4313ad9ff3383bdd6adad623ac9bf4f81d4f64e343b30fb3a2d3e641b4af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd4313ad9ff3383bdd6adad623ac9bf4f81d4f64e343b30fb3a2d3e641b4af3->enter($__internal_acd4313ad9ff3383bdd6adad623ac9bf4f81d4f64e343b30fb3a2d3e641b4af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_acd4313ad9ff3383bdd6adad623ac9bf4f81d4f64e343b30fb3a2d3e641b4af3->leave($__internal_acd4313ad9ff3383bdd6adad623ac9bf4f81d4f64e343b30fb3a2d3e641b4af3_prof);

        
        $__internal_a70a85659489aa704444eb665eeb48e4db7a11ca9a86d8b96336ea2a3799a3ce->leave($__internal_a70a85659489aa704444eb665eeb48e4db7a11ca9a86d8b96336ea2a3799a3ce_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\wamp\\www\\DKY\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
