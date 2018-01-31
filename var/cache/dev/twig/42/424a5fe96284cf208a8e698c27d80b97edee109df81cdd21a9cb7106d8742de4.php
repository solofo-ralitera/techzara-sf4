<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_fe4e677e9491f5e08f2942b7bc66f3ce530153e0ec0408a112fb5bb90ea2755c extends Twig_Template
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
        $__internal_317d316d7c4965be9fdfd943fdcce27a28f5f850fad4f5e4e76316dcde9110bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317d316d7c4965be9fdfd943fdcce27a28f5f850fad4f5e4e76316dcde9110bb->enter($__internal_317d316d7c4965be9fdfd943fdcce27a28f5f850fad4f5e4e76316dcde9110bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c3df23f4cd5933e909937ac4e1d6646093fe63d239348c4487db5a4b844c59f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3df23f4cd5933e909937ac4e1d6646093fe63d239348c4487db5a4b844c59f6->enter($__internal_c3df23f4cd5933e909937ac4e1d6646093fe63d239348c4487db5a4b844c59f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_317d316d7c4965be9fdfd943fdcce27a28f5f850fad4f5e4e76316dcde9110bb->leave($__internal_317d316d7c4965be9fdfd943fdcce27a28f5f850fad4f5e4e76316dcde9110bb_prof);

        
        $__internal_c3df23f4cd5933e909937ac4e1d6646093fe63d239348c4487db5a4b844c59f6->leave($__internal_c3df23f4cd5933e909937ac4e1d6646093fe63d239348c4487db5a4b844c59f6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_455456a2666213d8fccd540754eb5edb8cb8143c1dc83478b4870ad4034e82e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_455456a2666213d8fccd540754eb5edb8cb8143c1dc83478b4870ad4034e82e1->enter($__internal_455456a2666213d8fccd540754eb5edb8cb8143c1dc83478b4870ad4034e82e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cd140b4af3e5eca7c9aac3f9782315fe38f67d8cc8e78061d40634a3d3c0ccb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd140b4af3e5eca7c9aac3f9782315fe38f67d8cc8e78061d40634a3d3c0ccb1->enter($__internal_cd140b4af3e5eca7c9aac3f9782315fe38f67d8cc8e78061d40634a3d3c0ccb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
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
        
        $__internal_cd140b4af3e5eca7c9aac3f9782315fe38f67d8cc8e78061d40634a3d3c0ccb1->leave($__internal_cd140b4af3e5eca7c9aac3f9782315fe38f67d8cc8e78061d40634a3d3c0ccb1_prof);

        
        $__internal_455456a2666213d8fccd540754eb5edb8cb8143c1dc83478b4870ad4034e82e1->leave($__internal_455456a2666213d8fccd540754eb5edb8cb8143c1dc83478b4870ad4034e82e1_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
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
", "@WebProfiler/Collector/ajax.html.twig", "/home/solofo/Documents/Projects/sf4/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
