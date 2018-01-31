<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9ef260a0f2edf68371227f7d90f9df2d1dac64f94727c2669a74e246d82c7172 extends Twig_Template
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
        $__internal_5bde5e197a004a0271ec99f9550be21b1d2136eda166111075ad810aafc80579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bde5e197a004a0271ec99f9550be21b1d2136eda166111075ad810aafc80579->enter($__internal_5bde5e197a004a0271ec99f9550be21b1d2136eda166111075ad810aafc80579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ba7c23dea569fe8c01ad17d2c49e18a0a85f4a2d2170cf5e5f26a5aa4909e396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba7c23dea569fe8c01ad17d2c49e18a0a85f4a2d2170cf5e5f26a5aa4909e396->enter($__internal_ba7c23dea569fe8c01ad17d2c49e18a0a85f4a2d2170cf5e5f26a5aa4909e396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bde5e197a004a0271ec99f9550be21b1d2136eda166111075ad810aafc80579->leave($__internal_5bde5e197a004a0271ec99f9550be21b1d2136eda166111075ad810aafc80579_prof);

        
        $__internal_ba7c23dea569fe8c01ad17d2c49e18a0a85f4a2d2170cf5e5f26a5aa4909e396->leave($__internal_ba7c23dea569fe8c01ad17d2c49e18a0a85f4a2d2170cf5e5f26a5aa4909e396_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3f8ddfd9a94e760f8d5ed3f73cae3424ceec00de7f77540c052cff220d34b811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f8ddfd9a94e760f8d5ed3f73cae3424ceec00de7f77540c052cff220d34b811->enter($__internal_3f8ddfd9a94e760f8d5ed3f73cae3424ceec00de7f77540c052cff220d34b811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9cbd422874a8e676da3fa3348521f1115045a06d114a959de63a989c2eefe474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cbd422874a8e676da3fa3348521f1115045a06d114a959de63a989c2eefe474->enter($__internal_9cbd422874a8e676da3fa3348521f1115045a06d114a959de63a989c2eefe474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9cbd422874a8e676da3fa3348521f1115045a06d114a959de63a989c2eefe474->leave($__internal_9cbd422874a8e676da3fa3348521f1115045a06d114a959de63a989c2eefe474_prof);

        
        $__internal_3f8ddfd9a94e760f8d5ed3f73cae3424ceec00de7f77540c052cff220d34b811->leave($__internal_3f8ddfd9a94e760f8d5ed3f73cae3424ceec00de7f77540c052cff220d34b811_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c3b32a732aee3a7ea50f5c10c2ebdbe667473dacc2452d88053852c471954903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3b32a732aee3a7ea50f5c10c2ebdbe667473dacc2452d88053852c471954903->enter($__internal_c3b32a732aee3a7ea50f5c10c2ebdbe667473dacc2452d88053852c471954903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b6d04991d29fb6298b52c78fac54a1603999c567836b93ae9c81f6da3b10ca9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6d04991d29fb6298b52c78fac54a1603999c567836b93ae9c81f6da3b10ca9a->enter($__internal_b6d04991d29fb6298b52c78fac54a1603999c567836b93ae9c81f6da3b10ca9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b6d04991d29fb6298b52c78fac54a1603999c567836b93ae9c81f6da3b10ca9a->leave($__internal_b6d04991d29fb6298b52c78fac54a1603999c567836b93ae9c81f6da3b10ca9a_prof);

        
        $__internal_c3b32a732aee3a7ea50f5c10c2ebdbe667473dacc2452d88053852c471954903->leave($__internal_c3b32a732aee3a7ea50f5c10c2ebdbe667473dacc2452d88053852c471954903_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f19f5dc178db65d4d27111c91cb98730c011dd802d5ec8fcb12f969ff791f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f19f5dc178db65d4d27111c91cb98730c011dd802d5ec8fcb12f969ff791f1e->enter($__internal_7f19f5dc178db65d4d27111c91cb98730c011dd802d5ec8fcb12f969ff791f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_36ef8d6f777589a1442aa0f83c45e16f83c4e30cce1a7b1e99b8cd614c3f058b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36ef8d6f777589a1442aa0f83c45e16f83c4e30cce1a7b1e99b8cd614c3f058b->enter($__internal_36ef8d6f777589a1442aa0f83c45e16f83c4e30cce1a7b1e99b8cd614c3f058b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_36ef8d6f777589a1442aa0f83c45e16f83c4e30cce1a7b1e99b8cd614c3f058b->leave($__internal_36ef8d6f777589a1442aa0f83c45e16f83c4e30cce1a7b1e99b8cd614c3f058b_prof);

        
        $__internal_7f19f5dc178db65d4d27111c91cb98730c011dd802d5ec8fcb12f969ff791f1e->leave($__internal_7f19f5dc178db65d4d27111c91cb98730c011dd802d5ec8fcb12f969ff791f1e_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/solofo/Documents/Projects/sf4/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
