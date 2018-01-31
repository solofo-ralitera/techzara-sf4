<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2ab1d00a18dc5d4cac76df14a6ac187f4b198c48d036b2efddb4644d7a15c457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81b82804236adbb41abec72e0e2fd2ecc7d6846d9453255b1c2b31318caca370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b82804236adbb41abec72e0e2fd2ecc7d6846d9453255b1c2b31318caca370->enter($__internal_81b82804236adbb41abec72e0e2fd2ecc7d6846d9453255b1c2b31318caca370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_63683bee453f819c73788aae59960155c19c0460c37e16d2165366e73bc500f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63683bee453f819c73788aae59960155c19c0460c37e16d2165366e73bc500f1->enter($__internal_63683bee453f819c73788aae59960155c19c0460c37e16d2165366e73bc500f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81b82804236adbb41abec72e0e2fd2ecc7d6846d9453255b1c2b31318caca370->leave($__internal_81b82804236adbb41abec72e0e2fd2ecc7d6846d9453255b1c2b31318caca370_prof);

        
        $__internal_63683bee453f819c73788aae59960155c19c0460c37e16d2165366e73bc500f1->leave($__internal_63683bee453f819c73788aae59960155c19c0460c37e16d2165366e73bc500f1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_19c721a42056600b4c58e4ea8557dba0e79009a91a0228252b1835393fd4645f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c721a42056600b4c58e4ea8557dba0e79009a91a0228252b1835393fd4645f->enter($__internal_19c721a42056600b4c58e4ea8557dba0e79009a91a0228252b1835393fd4645f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_47d976e5627a964c500cc6553c8dfe1ee3b28ea444eb1d67aa4c13302843f274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d976e5627a964c500cc6553c8dfe1ee3b28ea444eb1d67aa4c13302843f274->enter($__internal_47d976e5627a964c500cc6553c8dfe1ee3b28ea444eb1d67aa4c13302843f274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_47d976e5627a964c500cc6553c8dfe1ee3b28ea444eb1d67aa4c13302843f274->leave($__internal_47d976e5627a964c500cc6553c8dfe1ee3b28ea444eb1d67aa4c13302843f274_prof);

        
        $__internal_19c721a42056600b4c58e4ea8557dba0e79009a91a0228252b1835393fd4645f->leave($__internal_19c721a42056600b4c58e4ea8557dba0e79009a91a0228252b1835393fd4645f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f8a51cd880290a31daee951c5158b51505efe6abdfa3221ef7789a85bb045c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8a51cd880290a31daee951c5158b51505efe6abdfa3221ef7789a85bb045c4->enter($__internal_1f8a51cd880290a31daee951c5158b51505efe6abdfa3221ef7789a85bb045c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a64445790af4ceab0cc0131fc38b654c3b98bdd53cd8214b6fd47681dd6b4cd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a64445790af4ceab0cc0131fc38b654c3b98bdd53cd8214b6fd47681dd6b4cd8->enter($__internal_a64445790af4ceab0cc0131fc38b654c3b98bdd53cd8214b6fd47681dd6b4cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_a64445790af4ceab0cc0131fc38b654c3b98bdd53cd8214b6fd47681dd6b4cd8->leave($__internal_a64445790af4ceab0cc0131fc38b654c3b98bdd53cd8214b6fd47681dd6b4cd8_prof);

        
        $__internal_1f8a51cd880290a31daee951c5158b51505efe6abdfa3221ef7789a85bb045c4->leave($__internal_1f8a51cd880290a31daee951c5158b51505efe6abdfa3221ef7789a85bb045c4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fe06d934fb8480f5b73d742ff6b821705b3203fee4804193237cc0c99ff3fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fe06d934fb8480f5b73d742ff6b821705b3203fee4804193237cc0c99ff3fc6->enter($__internal_0fe06d934fb8480f5b73d742ff6b821705b3203fee4804193237cc0c99ff3fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed0f439b765ea6b0363326a4fc2bd1e0982c25987a3afe63b97b1b04a56aee3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed0f439b765ea6b0363326a4fc2bd1e0982c25987a3afe63b97b1b04a56aee3c->enter($__internal_ed0f439b765ea6b0363326a4fc2bd1e0982c25987a3afe63b97b1b04a56aee3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ed0f439b765ea6b0363326a4fc2bd1e0982c25987a3afe63b97b1b04a56aee3c->leave($__internal_ed0f439b765ea6b0363326a4fc2bd1e0982c25987a3afe63b97b1b04a56aee3c_prof);

        
        $__internal_0fe06d934fb8480f5b73d742ff6b821705b3203fee4804193237cc0c99ff3fc6->leave($__internal_0fe06d934fb8480f5b73d742ff6b821705b3203fee4804193237cc0c99ff3fc6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/solofo/Documents/Projects/sf4/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
