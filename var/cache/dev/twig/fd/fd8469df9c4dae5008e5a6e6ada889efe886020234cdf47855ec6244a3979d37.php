<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_2f998074975e9a201b9f949df35f89b83cf550c6c9c06c8eac964d18f9191e6d extends Twig_Template
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
        $__internal_53d3f7959973dc0c3bae7033a16ebcc4d85ceb1ff3c5a50f9dea0b24dbef5ef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d3f7959973dc0c3bae7033a16ebcc4d85ceb1ff3c5a50f9dea0b24dbef5ef9->enter($__internal_53d3f7959973dc0c3bae7033a16ebcc4d85ceb1ff3c5a50f9dea0b24dbef5ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_221187b9ac4cd01a7cad98a94fddc27b607df2b83cf5e51fdc67f56831dc0869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_221187b9ac4cd01a7cad98a94fddc27b607df2b83cf5e51fdc67f56831dc0869->enter($__internal_221187b9ac4cd01a7cad98a94fddc27b607df2b83cf5e51fdc67f56831dc0869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_53d3f7959973dc0c3bae7033a16ebcc4d85ceb1ff3c5a50f9dea0b24dbef5ef9->leave($__internal_53d3f7959973dc0c3bae7033a16ebcc4d85ceb1ff3c5a50f9dea0b24dbef5ef9_prof);

        
        $__internal_221187b9ac4cd01a7cad98a94fddc27b607df2b83cf5e51fdc67f56831dc0869->leave($__internal_221187b9ac4cd01a7cad98a94fddc27b607df2b83cf5e51fdc67f56831dc0869_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
