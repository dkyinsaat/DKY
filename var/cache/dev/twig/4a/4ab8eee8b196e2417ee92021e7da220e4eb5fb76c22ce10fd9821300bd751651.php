<?php

/* base.html.twig */
class __TwigTemplate_fc8785b618bc261ce43e15fe6238e4f7694a1bf9082b63b2548789387ad50f26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f260f8b87d0c24aefc5ff3e26cfead09bcf8e5ca57286a576d3d9f8624df2c7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f260f8b87d0c24aefc5ff3e26cfead09bcf8e5ca57286a576d3d9f8624df2c7f->enter($__internal_f260f8b87d0c24aefc5ff3e26cfead09bcf8e5ca57286a576d3d9f8624df2c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8bf94dd8d9b907e836360574d44cf2f9baacaa35d8995eaf8586d86424e5642c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf94dd8d9b907e836360574d44cf2f9baacaa35d8995eaf8586d86424e5642c->enter($__internal_8bf94dd8d9b907e836360574d44cf2f9baacaa35d8995eaf8586d86424e5642c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>  
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f260f8b87d0c24aefc5ff3e26cfead09bcf8e5ca57286a576d3d9f8624df2c7f->leave($__internal_f260f8b87d0c24aefc5ff3e26cfead09bcf8e5ca57286a576d3d9f8624df2c7f_prof);

        
        $__internal_8bf94dd8d9b907e836360574d44cf2f9baacaa35d8995eaf8586d86424e5642c->leave($__internal_8bf94dd8d9b907e836360574d44cf2f9baacaa35d8995eaf8586d86424e5642c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_310cecd6eb1fccb1b9150c4e48a1aeaec16c6b56c978c857631830a3b105e985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_310cecd6eb1fccb1b9150c4e48a1aeaec16c6b56c978c857631830a3b105e985->enter($__internal_310cecd6eb1fccb1b9150c4e48a1aeaec16c6b56c978c857631830a3b105e985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe98a9b94fdf0db461a60e1ff0ca804f4f6ae7da4c3f45aebdc5a724a47393d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe98a9b94fdf0db461a60e1ff0ca804f4f6ae7da4c3f45aebdc5a724a47393d1->enter($__internal_fe98a9b94fdf0db461a60e1ff0ca804f4f6ae7da4c3f45aebdc5a724a47393d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fe98a9b94fdf0db461a60e1ff0ca804f4f6ae7da4c3f45aebdc5a724a47393d1->leave($__internal_fe98a9b94fdf0db461a60e1ff0ca804f4f6ae7da4c3f45aebdc5a724a47393d1_prof);

        
        $__internal_310cecd6eb1fccb1b9150c4e48a1aeaec16c6b56c978c857631830a3b105e985->leave($__internal_310cecd6eb1fccb1b9150c4e48a1aeaec16c6b56c978c857631830a3b105e985_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_322d61fa8216bab20d5ab6b89ffd2e10abc8fa048343d560cf31ef6ec53b0b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_322d61fa8216bab20d5ab6b89ffd2e10abc8fa048343d560cf31ef6ec53b0b05->enter($__internal_322d61fa8216bab20d5ab6b89ffd2e10abc8fa048343d560cf31ef6ec53b0b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_73798f61d5cf163483bd536bac11f38f53316db62f5dab353b1a2b829a0626e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73798f61d5cf163483bd536bac11f38f53316db62f5dab353b1a2b829a0626e4->enter($__internal_73798f61d5cf163483bd536bac11f38f53316db62f5dab353b1a2b829a0626e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_73798f61d5cf163483bd536bac11f38f53316db62f5dab353b1a2b829a0626e4->leave($__internal_73798f61d5cf163483bd536bac11f38f53316db62f5dab353b1a2b829a0626e4_prof);

        
        $__internal_322d61fa8216bab20d5ab6b89ffd2e10abc8fa048343d560cf31ef6ec53b0b05->leave($__internal_322d61fa8216bab20d5ab6b89ffd2e10abc8fa048343d560cf31ef6ec53b0b05_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bb652852995448ae20672981da0b1875f8dcfe18622b8a74cf21586c1a068a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bb652852995448ae20672981da0b1875f8dcfe18622b8a74cf21586c1a068a5->enter($__internal_8bb652852995448ae20672981da0b1875f8dcfe18622b8a74cf21586c1a068a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8275eb107cc53688581b286f6ca67768a7cecd6b47032d79102b9341ed697e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8275eb107cc53688581b286f6ca67768a7cecd6b47032d79102b9341ed697e6e->enter($__internal_8275eb107cc53688581b286f6ca67768a7cecd6b47032d79102b9341ed697e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8275eb107cc53688581b286f6ca67768a7cecd6b47032d79102b9341ed697e6e->leave($__internal_8275eb107cc53688581b286f6ca67768a7cecd6b47032d79102b9341ed697e6e_prof);

        
        $__internal_8bb652852995448ae20672981da0b1875f8dcfe18622b8a74cf21586c1a068a5->leave($__internal_8bb652852995448ae20672981da0b1875f8dcfe18622b8a74cf21586c1a068a5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e70b05de34a1a78ab0f8b47340c5f84ad394d9bd870ac76cb24dee915db0078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e70b05de34a1a78ab0f8b47340c5f84ad394d9bd870ac76cb24dee915db0078->enter($__internal_2e70b05de34a1a78ab0f8b47340c5f84ad394d9bd870ac76cb24dee915db0078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d716edd53e64a3ce8272f841e5724ceacf8088d4ae4e2fd8ca14bb4b87d5e28c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d716edd53e64a3ce8272f841e5724ceacf8088d4ae4e2fd8ca14bb4b87d5e28c->enter($__internal_d716edd53e64a3ce8272f841e5724ceacf8088d4ae4e2fd8ca14bb4b87d5e28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d716edd53e64a3ce8272f841e5724ceacf8088d4ae4e2fd8ca14bb4b87d5e28c->leave($__internal_d716edd53e64a3ce8272f841e5724ceacf8088d4ae4e2fd8ca14bb4b87d5e28c_prof);

        
        $__internal_2e70b05de34a1a78ab0f8b47340c5f84ad394d9bd870ac76cb24dee915db0078->leave($__internal_2e70b05de34a1a78ab0f8b47340c5f84ad394d9bd870ac76cb24dee915db0078_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>  
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "D:\\wamp\\www\\DKY\\app\\Resources\\views\\base.html.twig");
    }
}
