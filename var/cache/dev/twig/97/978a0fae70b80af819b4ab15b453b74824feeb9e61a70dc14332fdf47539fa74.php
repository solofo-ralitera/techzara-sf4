<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_774ebab3377fd13eb7b0aa76251b759fc832b3cba7aa6072ce63ce18e5e2c3d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e7b370e122e60317bcc5ecc8d8afc6355bc917c2aabdfca2ddc3443533d8eedc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b370e122e60317bcc5ecc8d8afc6355bc917c2aabdfca2ddc3443533d8eedc->enter($__internal_e7b370e122e60317bcc5ecc8d8afc6355bc917c2aabdfca2ddc3443533d8eedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_56d067625b827094a3259cf3d7010fcd0539a7dd3ac2962b095af09e2c2c2919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d067625b827094a3259cf3d7010fcd0539a7dd3ac2962b095af09e2c2c2919->enter($__internal_56d067625b827094a3259cf3d7010fcd0539a7dd3ac2962b095af09e2c2c2919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7b370e122e60317bcc5ecc8d8afc6355bc917c2aabdfca2ddc3443533d8eedc->leave($__internal_e7b370e122e60317bcc5ecc8d8afc6355bc917c2aabdfca2ddc3443533d8eedc_prof);

        
        $__internal_56d067625b827094a3259cf3d7010fcd0539a7dd3ac2962b095af09e2c2c2919->leave($__internal_56d067625b827094a3259cf3d7010fcd0539a7dd3ac2962b095af09e2c2c2919_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bcd4d06cc02ef7efbd00d8ddbd019a23c5a2a26aa3a0eaea9e83d27bbe024871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd4d06cc02ef7efbd00d8ddbd019a23c5a2a26aa3a0eaea9e83d27bbe024871->enter($__internal_bcd4d06cc02ef7efbd00d8ddbd019a23c5a2a26aa3a0eaea9e83d27bbe024871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b38b06d8b3c9a5addaca8646c83d858cb2c2f8cbecb7280cb17ae3de900195d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b38b06d8b3c9a5addaca8646c83d858cb2c2f8cbecb7280cb17ae3de900195d2->enter($__internal_b38b06d8b3c9a5addaca8646c83d858cb2c2f8cbecb7280cb17ae3de900195d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b38b06d8b3c9a5addaca8646c83d858cb2c2f8cbecb7280cb17ae3de900195d2->leave($__internal_b38b06d8b3c9a5addaca8646c83d858cb2c2f8cbecb7280cb17ae3de900195d2_prof);

        
        $__internal_bcd4d06cc02ef7efbd00d8ddbd019a23c5a2a26aa3a0eaea9e83d27bbe024871->leave($__internal_bcd4d06cc02ef7efbd00d8ddbd019a23c5a2a26aa3a0eaea9e83d27bbe024871_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee381a24d6060cedac5a2a882e101b8d2a941d0ad9beb5d3306f8e05446cecdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee381a24d6060cedac5a2a882e101b8d2a941d0ad9beb5d3306f8e05446cecdf->enter($__internal_ee381a24d6060cedac5a2a882e101b8d2a941d0ad9beb5d3306f8e05446cecdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4eaaee0315c2299461a691d5afba7e3e7a15212dd94da7c87660c2af86d74c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eaaee0315c2299461a691d5afba7e3e7a15212dd94da7c87660c2af86d74c87->enter($__internal_4eaaee0315c2299461a691d5afba7e3e7a15212dd94da7c87660c2af86d74c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4eaaee0315c2299461a691d5afba7e3e7a15212dd94da7c87660c2af86d74c87->leave($__internal_4eaaee0315c2299461a691d5afba7e3e7a15212dd94da7c87660c2af86d74c87_prof);

        
        $__internal_ee381a24d6060cedac5a2a882e101b8d2a941d0ad9beb5d3306f8e05446cecdf->leave($__internal_ee381a24d6060cedac5a2a882e101b8d2a941d0ad9beb5d3306f8e05446cecdf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6536a1c16554c872927805d81756b9f80d1a4be9c986cde3d775328d99f0a9db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6536a1c16554c872927805d81756b9f80d1a4be9c986cde3d775328d99f0a9db->enter($__internal_6536a1c16554c872927805d81756b9f80d1a4be9c986cde3d775328d99f0a9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f8f2ffd11b2b0821adae2a40b63a1ae31d46f2fc750b920bdc0ebb5ed520c0dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f2ffd11b2b0821adae2a40b63a1ae31d46f2fc750b920bdc0ebb5ed520c0dd->enter($__internal_f8f2ffd11b2b0821adae2a40b63a1ae31d46f2fc750b920bdc0ebb5ed520c0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_f8f2ffd11b2b0821adae2a40b63a1ae31d46f2fc750b920bdc0ebb5ed520c0dd->leave($__internal_f8f2ffd11b2b0821adae2a40b63a1ae31d46f2fc750b920bdc0ebb5ed520c0dd_prof);

        
        $__internal_6536a1c16554c872927805d81756b9f80d1a4be9c986cde3d775328d99f0a9db->leave($__internal_6536a1c16554c872927805d81756b9f80d1a4be9c986cde3d775328d99f0a9db_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/solofo/Documents/Projects/sf4/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
