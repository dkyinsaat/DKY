<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_43acadfa0cc05082f29f50d1ce5e6037a0dec5d41efe0f6b328c192fda3e7c41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5726f02a730d38304a1d1f072bb047710e9a66dd5653115163a34bf67e4d0b24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5726f02a730d38304a1d1f072bb047710e9a66dd5653115163a34bf67e4d0b24->enter($__internal_5726f02a730d38304a1d1f072bb047710e9a66dd5653115163a34bf67e4d0b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7d23e40958da5a35c6ee1687463c0139d22553a51846f6604599f0f2bbf1d57c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d23e40958da5a35c6ee1687463c0139d22553a51846f6604599f0f2bbf1d57c->enter($__internal_7d23e40958da5a35c6ee1687463c0139d22553a51846f6604599f0f2bbf1d57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5726f02a730d38304a1d1f072bb047710e9a66dd5653115163a34bf67e4d0b24->leave($__internal_5726f02a730d38304a1d1f072bb047710e9a66dd5653115163a34bf67e4d0b24_prof);

        
        $__internal_7d23e40958da5a35c6ee1687463c0139d22553a51846f6604599f0f2bbf1d57c->leave($__internal_7d23e40958da5a35c6ee1687463c0139d22553a51846f6604599f0f2bbf1d57c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_af4bd131692595bbfd115ce2f13a0b1cf63929b62a9fe5b11fe8b370b4940b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af4bd131692595bbfd115ce2f13a0b1cf63929b62a9fe5b11fe8b370b4940b33->enter($__internal_af4bd131692595bbfd115ce2f13a0b1cf63929b62a9fe5b11fe8b370b4940b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_38aa823871cfe22949bb2cedd949f1b62e66cb27ea09327ec802efbf090f8e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38aa823871cfe22949bb2cedd949f1b62e66cb27ea09327ec802efbf090f8e22->enter($__internal_38aa823871cfe22949bb2cedd949f1b62e66cb27ea09327ec802efbf090f8e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_38aa823871cfe22949bb2cedd949f1b62e66cb27ea09327ec802efbf090f8e22->leave($__internal_38aa823871cfe22949bb2cedd949f1b62e66cb27ea09327ec802efbf090f8e22_prof);

        
        $__internal_af4bd131692595bbfd115ce2f13a0b1cf63929b62a9fe5b11fe8b370b4940b33->leave($__internal_af4bd131692595bbfd115ce2f13a0b1cf63929b62a9fe5b11fe8b370b4940b33_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e19c82aac2b59a5c30ce8616d4d7a4ff5155b001ae3f1ee3695c2a3d9b69c898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e19c82aac2b59a5c30ce8616d4d7a4ff5155b001ae3f1ee3695c2a3d9b69c898->enter($__internal_e19c82aac2b59a5c30ce8616d4d7a4ff5155b001ae3f1ee3695c2a3d9b69c898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_08465f0ef9303c629376115afc89632007bd9cae395aa4cccd14e7585f9e9a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08465f0ef9303c629376115afc89632007bd9cae395aa4cccd14e7585f9e9a2c->enter($__internal_08465f0ef9303c629376115afc89632007bd9cae395aa4cccd14e7585f9e9a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_08465f0ef9303c629376115afc89632007bd9cae395aa4cccd14e7585f9e9a2c->leave($__internal_08465f0ef9303c629376115afc89632007bd9cae395aa4cccd14e7585f9e9a2c_prof);

        
        $__internal_e19c82aac2b59a5c30ce8616d4d7a4ff5155b001ae3f1ee3695c2a3d9b69c898->leave($__internal_e19c82aac2b59a5c30ce8616d4d7a4ff5155b001ae3f1ee3695c2a3d9b69c898_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cac2809902b81a2bb4fe129db5f1919164d0010820cd03665e8974e624fb1b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cac2809902b81a2bb4fe129db5f1919164d0010820cd03665e8974e624fb1b9c->enter($__internal_cac2809902b81a2bb4fe129db5f1919164d0010820cd03665e8974e624fb1b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e8cf8618082f4c6b8ea2b789e7c87191562b7dc2951b7213671a21bd572277bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8cf8618082f4c6b8ea2b789e7c87191562b7dc2951b7213671a21bd572277bf->enter($__internal_e8cf8618082f4c6b8ea2b789e7c87191562b7dc2951b7213671a21bd572277bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e8cf8618082f4c6b8ea2b789e7c87191562b7dc2951b7213671a21bd572277bf->leave($__internal_e8cf8618082f4c6b8ea2b789e7c87191562b7dc2951b7213671a21bd572277bf_prof);

        
        $__internal_cac2809902b81a2bb4fe129db5f1919164d0010820cd03665e8974e624fb1b9c->leave($__internal_cac2809902b81a2bb4fe129db5f1919164d0010820cd03665e8974e624fb1b9c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\wamp\\www\\DKY\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
