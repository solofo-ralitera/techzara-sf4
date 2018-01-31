<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_708cb2937d8fa320daa33cbafb82872f8d1d066532af6b94d003f7a190e79198 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e58079a25b3726a5648a467cb8ead0d45a24c221ea6d6fd588ae91171ea93bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e58079a25b3726a5648a467cb8ead0d45a24c221ea6d6fd588ae91171ea93bea->enter($__internal_e58079a25b3726a5648a467cb8ead0d45a24c221ea6d6fd588ae91171ea93bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8fe670b1ff3f30d5f30d2adeda69a361c49d32c093efd9802ba2e39cd58d7f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fe670b1ff3f30d5f30d2adeda69a361c49d32c093efd9802ba2e39cd58d7f6f->enter($__internal_8fe670b1ff3f30d5f30d2adeda69a361c49d32c093efd9802ba2e39cd58d7f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_e58079a25b3726a5648a467cb8ead0d45a24c221ea6d6fd588ae91171ea93bea->leave($__internal_e58079a25b3726a5648a467cb8ead0d45a24c221ea6d6fd588ae91171ea93bea_prof);

        
        $__internal_8fe670b1ff3f30d5f30d2adeda69a361c49d32c093efd9802ba2e39cd58d7f6f->leave($__internal_8fe670b1ff3f30d5f30d2adeda69a361c49d32c093efd9802ba2e39cd58d7f6f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b17766751c55b4d5a81988eb8d834b7e599819d8f18edc2e8f5b041e13b4b997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b17766751c55b4d5a81988eb8d834b7e599819d8f18edc2e8f5b041e13b4b997->enter($__internal_b17766751c55b4d5a81988eb8d834b7e599819d8f18edc2e8f5b041e13b4b997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_34bcd20c95fd1bfe50dfeb7cc5933678808da950d6265ed4e5641ca0606d6fd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34bcd20c95fd1bfe50dfeb7cc5933678808da950d6265ed4e5641ca0606d6fd4->enter($__internal_34bcd20c95fd1bfe50dfeb7cc5933678808da950d6265ed4e5641ca0606d6fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_34bcd20c95fd1bfe50dfeb7cc5933678808da950d6265ed4e5641ca0606d6fd4->leave($__internal_34bcd20c95fd1bfe50dfeb7cc5933678808da950d6265ed4e5641ca0606d6fd4_prof);

        
        $__internal_b17766751c55b4d5a81988eb8d834b7e599819d8f18edc2e8f5b041e13b4b997->leave($__internal_b17766751c55b4d5a81988eb8d834b7e599819d8f18edc2e8f5b041e13b4b997_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_36637463f174f5d03adf9b94aa5f1ced53fd963f7509bdb09c767186505acbbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36637463f174f5d03adf9b94aa5f1ced53fd963f7509bdb09c767186505acbbd->enter($__internal_36637463f174f5d03adf9b94aa5f1ced53fd963f7509bdb09c767186505acbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dab51082552a5ec2921e58ec481e6580c0ba4e4aa47f8549c51d97de145cad33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab51082552a5ec2921e58ec481e6580c0ba4e4aa47f8549c51d97de145cad33->enter($__internal_dab51082552a5ec2921e58ec481e6580c0ba4e4aa47f8549c51d97de145cad33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_dab51082552a5ec2921e58ec481e6580c0ba4e4aa47f8549c51d97de145cad33->leave($__internal_dab51082552a5ec2921e58ec481e6580c0ba4e4aa47f8549c51d97de145cad33_prof);

        
        $__internal_36637463f174f5d03adf9b94aa5f1ced53fd963f7509bdb09c767186505acbbd->leave($__internal_36637463f174f5d03adf9b94aa5f1ced53fd963f7509bdb09c767186505acbbd_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec8c8bfd63049522a9ef9c8b8ba17a0e5d91ffad006ad5f63e501994772a07e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec8c8bfd63049522a9ef9c8b8ba17a0e5d91ffad006ad5f63e501994772a07e2->enter($__internal_ec8c8bfd63049522a9ef9c8b8ba17a0e5d91ffad006ad5f63e501994772a07e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5bad4c99c2fde23003cf5fd2eadef536392b21ca10b7576d5500d4fbb5772549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bad4c99c2fde23003cf5fd2eadef536392b21ca10b7576d5500d4fbb5772549->enter($__internal_5bad4c99c2fde23003cf5fd2eadef536392b21ca10b7576d5500d4fbb5772549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5bad4c99c2fde23003cf5fd2eadef536392b21ca10b7576d5500d4fbb5772549->leave($__internal_5bad4c99c2fde23003cf5fd2eadef536392b21ca10b7576d5500d4fbb5772549_prof);

        
        $__internal_ec8c8bfd63049522a9ef9c8b8ba17a0e5d91ffad006ad5f63e501994772a07e2->leave($__internal_ec8c8bfd63049522a9ef9c8b8ba17a0e5d91ffad006ad5f63e501994772a07e2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/solofo/Documents/Projects/sf4/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
