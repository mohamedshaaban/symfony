<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2392faadfa7d87477a3c034530a18165f1e5cffcb8dfba65da6902cfdd480926 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_598da39e697072b10062ad0fc88d6cb2d0a4ba587f2cdc8c26459f3f2260e559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_598da39e697072b10062ad0fc88d6cb2d0a4ba587f2cdc8c26459f3f2260e559->enter($__internal_598da39e697072b10062ad0fc88d6cb2d0a4ba587f2cdc8c26459f3f2260e559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_cb8436a9db2df97ca6037f4e1d898bb559c77bff017846a09752bcd212f4ed4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8436a9db2df97ca6037f4e1d898bb559c77bff017846a09752bcd212f4ed4b->enter($__internal_cb8436a9db2df97ca6037f4e1d898bb559c77bff017846a09752bcd212f4ed4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_598da39e697072b10062ad0fc88d6cb2d0a4ba587f2cdc8c26459f3f2260e559->leave($__internal_598da39e697072b10062ad0fc88d6cb2d0a4ba587f2cdc8c26459f3f2260e559_prof);

        
        $__internal_cb8436a9db2df97ca6037f4e1d898bb559c77bff017846a09752bcd212f4ed4b->leave($__internal_cb8436a9db2df97ca6037f4e1d898bb559c77bff017846a09752bcd212f4ed4b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
