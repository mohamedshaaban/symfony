<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_739946974c91524e43dc8243f0cfccc30f1bdb3bd6299a1fcf597966161b58e0 extends Twig_Template
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
        $__internal_495b441dc00cc2f32054862e6b546aace01a85c33bc07e07d4b6f22aa3b50275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_495b441dc00cc2f32054862e6b546aace01a85c33bc07e07d4b6f22aa3b50275->enter($__internal_495b441dc00cc2f32054862e6b546aace01a85c33bc07e07d4b6f22aa3b50275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_6a76a4c9987b9c6d26faba51ae7052b3a0dac1808c87765f247eec83034c96ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a76a4c9987b9c6d26faba51ae7052b3a0dac1808c87765f247eec83034c96ce->enter($__internal_6a76a4c9987b9c6d26faba51ae7052b3a0dac1808c87765f247eec83034c96ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_495b441dc00cc2f32054862e6b546aace01a85c33bc07e07d4b6f22aa3b50275->leave($__internal_495b441dc00cc2f32054862e6b546aace01a85c33bc07e07d4b6f22aa3b50275_prof);

        
        $__internal_6a76a4c9987b9c6d26faba51ae7052b3a0dac1808c87765f247eec83034c96ce->leave($__internal_6a76a4c9987b9c6d26faba51ae7052b3a0dac1808c87765f247eec83034c96ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
