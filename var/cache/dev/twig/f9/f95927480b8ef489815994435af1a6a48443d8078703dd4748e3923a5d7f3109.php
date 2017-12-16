<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7b94354c65987672dec8f3bd976f188c7fa00422480cd3928d8e0a49898cd73c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_fd6107fd2e8decf1d55cf84c34d16f3fba5516124db2b67aab952b12ade60030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6107fd2e8decf1d55cf84c34d16f3fba5516124db2b67aab952b12ade60030->enter($__internal_fd6107fd2e8decf1d55cf84c34d16f3fba5516124db2b67aab952b12ade60030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_6e13a37812ab7396490809b2a6eae67a419e0933bf248617a18c9fbc8369b365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e13a37812ab7396490809b2a6eae67a419e0933bf248617a18c9fbc8369b365->enter($__internal_6e13a37812ab7396490809b2a6eae67a419e0933bf248617a18c9fbc8369b365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd6107fd2e8decf1d55cf84c34d16f3fba5516124db2b67aab952b12ade60030->leave($__internal_fd6107fd2e8decf1d55cf84c34d16f3fba5516124db2b67aab952b12ade60030_prof);

        
        $__internal_6e13a37812ab7396490809b2a6eae67a419e0933bf248617a18c9fbc8369b365->leave($__internal_6e13a37812ab7396490809b2a6eae67a419e0933bf248617a18c9fbc8369b365_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_487e11a7430161c729d952f50cb19c6c5e48749032eb6e4f5adabc93eac0e475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_487e11a7430161c729d952f50cb19c6c5e48749032eb6e4f5adabc93eac0e475->enter($__internal_487e11a7430161c729d952f50cb19c6c5e48749032eb6e4f5adabc93eac0e475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_074d39245f21619992d1b763427bc715bfa966fc7ff0beb8fd258ae968d20b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074d39245f21619992d1b763427bc715bfa966fc7ff0beb8fd258ae968d20b81->enter($__internal_074d39245f21619992d1b763427bc715bfa966fc7ff0beb8fd258ae968d20b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_074d39245f21619992d1b763427bc715bfa966fc7ff0beb8fd258ae968d20b81->leave($__internal_074d39245f21619992d1b763427bc715bfa966fc7ff0beb8fd258ae968d20b81_prof);

        
        $__internal_487e11a7430161c729d952f50cb19c6c5e48749032eb6e4f5adabc93eac0e475->leave($__internal_487e11a7430161c729d952f50cb19c6c5e48749032eb6e4f5adabc93eac0e475_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_72320c2db52186b12bc60f0f294f70d4d432e21f88611e08cd081c0a1f4993bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72320c2db52186b12bc60f0f294f70d4d432e21f88611e08cd081c0a1f4993bc->enter($__internal_72320c2db52186b12bc60f0f294f70d4d432e21f88611e08cd081c0a1f4993bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f8d2b32076e12cb75bec8fea7898481320c57694508ded1594e75ec6e426f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f8d2b32076e12cb75bec8fea7898481320c57694508ded1594e75ec6e426f36->enter($__internal_6f8d2b32076e12cb75bec8fea7898481320c57694508ded1594e75ec6e426f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_6f8d2b32076e12cb75bec8fea7898481320c57694508ded1594e75ec6e426f36->leave($__internal_6f8d2b32076e12cb75bec8fea7898481320c57694508ded1594e75ec6e426f36_prof);

        
        $__internal_72320c2db52186b12bc60f0f294f70d4d432e21f88611e08cd081c0a1f4993bc->leave($__internal_72320c2db52186b12bc60f0f294f70d4d432e21f88611e08cd081c0a1f4993bc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6f8a182f44b91abef39d77310908929bf64b03cb6e8f1e2ac1d06e78cebc789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6f8a182f44b91abef39d77310908929bf64b03cb6e8f1e2ac1d06e78cebc789->enter($__internal_d6f8a182f44b91abef39d77310908929bf64b03cb6e8f1e2ac1d06e78cebc789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9e1cd18bbe3f143a804816e858bd524a87523378f03c747cfc7b27fdfb4b41a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e1cd18bbe3f143a804816e858bd524a87523378f03c747cfc7b27fdfb4b41a->enter($__internal_d9e1cd18bbe3f143a804816e858bd524a87523378f03c747cfc7b27fdfb4b41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_d9e1cd18bbe3f143a804816e858bd524a87523378f03c747cfc7b27fdfb4b41a->leave($__internal_d9e1cd18bbe3f143a804816e858bd524a87523378f03c747cfc7b27fdfb4b41a_prof);

        
        $__internal_d6f8a182f44b91abef39d77310908929bf64b03cb6e8f1e2ac1d06e78cebc789->leave($__internal_d6f8a182f44b91abef39d77310908929bf64b03cb6e8f1e2ac1d06e78cebc789_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
