<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_72975a5620644c60bf11767c983dab5b7f0a849552b807f005fd73a9fe839de9 extends Twig_Template
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
        $__internal_ad8982119093b4ed2664a4356658790e01b13ec6ce1d1cc35273dc8999920c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad8982119093b4ed2664a4356658790e01b13ec6ce1d1cc35273dc8999920c17->enter($__internal_ad8982119093b4ed2664a4356658790e01b13ec6ce1d1cc35273dc8999920c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_df79df925a28e9c961849a2b141bc468afde06c3210114edf3c69f51d71930fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df79df925a28e9c961849a2b141bc468afde06c3210114edf3c69f51d71930fd->enter($__internal_df79df925a28e9c961849a2b141bc468afde06c3210114edf3c69f51d71930fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad8982119093b4ed2664a4356658790e01b13ec6ce1d1cc35273dc8999920c17->leave($__internal_ad8982119093b4ed2664a4356658790e01b13ec6ce1d1cc35273dc8999920c17_prof);

        
        $__internal_df79df925a28e9c961849a2b141bc468afde06c3210114edf3c69f51d71930fd->leave($__internal_df79df925a28e9c961849a2b141bc468afde06c3210114edf3c69f51d71930fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7d7e3a63971a07e58a5b5e2e72be5fa23116cd1afb61fa935476cdb407613363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d7e3a63971a07e58a5b5e2e72be5fa23116cd1afb61fa935476cdb407613363->enter($__internal_7d7e3a63971a07e58a5b5e2e72be5fa23116cd1afb61fa935476cdb407613363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c6f4595a0ad7c86df47fbf99caad48d4734208e3797d052cc941f38a71d29e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f4595a0ad7c86df47fbf99caad48d4734208e3797d052cc941f38a71d29e43->enter($__internal_c6f4595a0ad7c86df47fbf99caad48d4734208e3797d052cc941f38a71d29e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c6f4595a0ad7c86df47fbf99caad48d4734208e3797d052cc941f38a71d29e43->leave($__internal_c6f4595a0ad7c86df47fbf99caad48d4734208e3797d052cc941f38a71d29e43_prof);

        
        $__internal_7d7e3a63971a07e58a5b5e2e72be5fa23116cd1afb61fa935476cdb407613363->leave($__internal_7d7e3a63971a07e58a5b5e2e72be5fa23116cd1afb61fa935476cdb407613363_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c855d4ea6102c9e676d13d79034653db6b446cf0a5c5193585ee70c28e153e72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c855d4ea6102c9e676d13d79034653db6b446cf0a5c5193585ee70c28e153e72->enter($__internal_c855d4ea6102c9e676d13d79034653db6b446cf0a5c5193585ee70c28e153e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c87eefb3832d4a8ad0eee73a5083916dc4148450506e094475db37ad6dcd05a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c87eefb3832d4a8ad0eee73a5083916dc4148450506e094475db37ad6dcd05a->enter($__internal_4c87eefb3832d4a8ad0eee73a5083916dc4148450506e094475db37ad6dcd05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_4c87eefb3832d4a8ad0eee73a5083916dc4148450506e094475db37ad6dcd05a->leave($__internal_4c87eefb3832d4a8ad0eee73a5083916dc4148450506e094475db37ad6dcd05a_prof);

        
        $__internal_c855d4ea6102c9e676d13d79034653db6b446cf0a5c5193585ee70c28e153e72->leave($__internal_c855d4ea6102c9e676d13d79034653db6b446cf0a5c5193585ee70c28e153e72_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_37fcd146ee55cda095bc252bdfd39c2cb50cec56659918786560155faac74f12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37fcd146ee55cda095bc252bdfd39c2cb50cec56659918786560155faac74f12->enter($__internal_37fcd146ee55cda095bc252bdfd39c2cb50cec56659918786560155faac74f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7967279bb2c474c0d26e3a381f5164351575d7f31c8fa985169d631674a0fec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7967279bb2c474c0d26e3a381f5164351575d7f31c8fa985169d631674a0fec6->enter($__internal_7967279bb2c474c0d26e3a381f5164351575d7f31c8fa985169d631674a0fec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_7967279bb2c474c0d26e3a381f5164351575d7f31c8fa985169d631674a0fec6->leave($__internal_7967279bb2c474c0d26e3a381f5164351575d7f31c8fa985169d631674a0fec6_prof);

        
        $__internal_37fcd146ee55cda095bc252bdfd39c2cb50cec56659918786560155faac74f12->leave($__internal_37fcd146ee55cda095bc252bdfd39c2cb50cec56659918786560155faac74f12_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
