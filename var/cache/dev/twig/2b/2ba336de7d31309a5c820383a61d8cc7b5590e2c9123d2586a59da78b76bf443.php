<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_2fefc80a43843f234047afa5ed293737e0c1703646e84aa0ef72050b87885281 extends Twig_Template
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
        $__internal_67e1090f81ecfee885e2c0174bc96418762dd5c08c7d61311fc650525b6003c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e1090f81ecfee885e2c0174bc96418762dd5c08c7d61311fc650525b6003c0->enter($__internal_67e1090f81ecfee885e2c0174bc96418762dd5c08c7d61311fc650525b6003c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_8f23eef432fb5345d325e4a7872d13950366237a57f764de67d183db185dcfdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f23eef432fb5345d325e4a7872d13950366237a57f764de67d183db185dcfdc->enter($__internal_8f23eef432fb5345d325e4a7872d13950366237a57f764de67d183db185dcfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_67e1090f81ecfee885e2c0174bc96418762dd5c08c7d61311fc650525b6003c0->leave($__internal_67e1090f81ecfee885e2c0174bc96418762dd5c08c7d61311fc650525b6003c0_prof);

        
        $__internal_8f23eef432fb5345d325e4a7872d13950366237a57f764de67d183db185dcfdc->leave($__internal_8f23eef432fb5345d325e4a7872d13950366237a57f764de67d183db185dcfdc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
