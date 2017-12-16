<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_201f6093b09b731cd7aca5aa26cb332f5620d793b6902edfdcb2c564284f140b extends Twig_Template
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
        $__internal_52d156c1a784c2408013455d9a50fbe23accbc9e47aa07e3c8b32a2093f4f9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d156c1a784c2408013455d9a50fbe23accbc9e47aa07e3c8b32a2093f4f9d2->enter($__internal_52d156c1a784c2408013455d9a50fbe23accbc9e47aa07e3c8b32a2093f4f9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d70b6fe39a20036974591c193063e564ff0adfeebde71e52f118ac28f32fff7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70b6fe39a20036974591c193063e564ff0adfeebde71e52f118ac28f32fff7f->enter($__internal_d70b6fe39a20036974591c193063e564ff0adfeebde71e52f118ac28f32fff7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_52d156c1a784c2408013455d9a50fbe23accbc9e47aa07e3c8b32a2093f4f9d2->leave($__internal_52d156c1a784c2408013455d9a50fbe23accbc9e47aa07e3c8b32a2093f4f9d2_prof);

        
        $__internal_d70b6fe39a20036974591c193063e564ff0adfeebde71e52f118ac28f32fff7f->leave($__internal_d70b6fe39a20036974591c193063e564ff0adfeebde71e52f118ac28f32fff7f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aca329370ab712a45af5d10ec2519cc4ba0df86f34fd2ec473e23e643911e3ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca329370ab712a45af5d10ec2519cc4ba0df86f34fd2ec473e23e643911e3ab->enter($__internal_aca329370ab712a45af5d10ec2519cc4ba0df86f34fd2ec473e23e643911e3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8edebbbbd4b970b244ddcf2c7daf17044a7b25352aa97c5bb6828fa539deaf23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8edebbbbd4b970b244ddcf2c7daf17044a7b25352aa97c5bb6828fa539deaf23->enter($__internal_8edebbbbd4b970b244ddcf2c7daf17044a7b25352aa97c5bb6828fa539deaf23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8edebbbbd4b970b244ddcf2c7daf17044a7b25352aa97c5bb6828fa539deaf23->leave($__internal_8edebbbbd4b970b244ddcf2c7daf17044a7b25352aa97c5bb6828fa539deaf23_prof);

        
        $__internal_aca329370ab712a45af5d10ec2519cc4ba0df86f34fd2ec473e23e643911e3ab->leave($__internal_aca329370ab712a45af5d10ec2519cc4ba0df86f34fd2ec473e23e643911e3ab_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d204004f3091c618aa8a5166c97bb78015567bee18973a244e7ba2fe45ae653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d204004f3091c618aa8a5166c97bb78015567bee18973a244e7ba2fe45ae653->enter($__internal_3d204004f3091c618aa8a5166c97bb78015567bee18973a244e7ba2fe45ae653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b63f89c4c3bec847fab5d55393c9ef541ee6e0a9516058e33856413b3c506b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b63f89c4c3bec847fab5d55393c9ef541ee6e0a9516058e33856413b3c506b6b->enter($__internal_b63f89c4c3bec847fab5d55393c9ef541ee6e0a9516058e33856413b3c506b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b63f89c4c3bec847fab5d55393c9ef541ee6e0a9516058e33856413b3c506b6b->leave($__internal_b63f89c4c3bec847fab5d55393c9ef541ee6e0a9516058e33856413b3c506b6b_prof);

        
        $__internal_3d204004f3091c618aa8a5166c97bb78015567bee18973a244e7ba2fe45ae653->leave($__internal_3d204004f3091c618aa8a5166c97bb78015567bee18973a244e7ba2fe45ae653_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ef015da8043bc9335f6a105b54cc42eecf0c9670b4b682d56a24975cbf97488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ef015da8043bc9335f6a105b54cc42eecf0c9670b4b682d56a24975cbf97488->enter($__internal_7ef015da8043bc9335f6a105b54cc42eecf0c9670b4b682d56a24975cbf97488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_981083ec5489f0992aab0bff7f58b78c200e40a42c727bd43fb1b10ed8035f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_981083ec5489f0992aab0bff7f58b78c200e40a42c727bd43fb1b10ed8035f5b->enter($__internal_981083ec5489f0992aab0bff7f58b78c200e40a42c727bd43fb1b10ed8035f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_981083ec5489f0992aab0bff7f58b78c200e40a42c727bd43fb1b10ed8035f5b->leave($__internal_981083ec5489f0992aab0bff7f58b78c200e40a42c727bd43fb1b10ed8035f5b_prof);

        
        $__internal_7ef015da8043bc9335f6a105b54cc42eecf0c9670b4b682d56a24975cbf97488->leave($__internal_7ef015da8043bc9335f6a105b54cc42eecf0c9670b4b682d56a24975cbf97488_prof);

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
", "@Twig/layout.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
