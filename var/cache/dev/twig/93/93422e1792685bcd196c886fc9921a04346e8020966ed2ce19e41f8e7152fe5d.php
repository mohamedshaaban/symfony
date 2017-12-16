<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_293bfce78494d2ac78e0890e2cf22f6948497b30430af0624de242bc5b461ee5 extends Twig_Template
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
        $__internal_d09cd85fbf9a84952749801a81d238856103f16300c056f74ccdb5a9e7303d9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d09cd85fbf9a84952749801a81d238856103f16300c056f74ccdb5a9e7303d9c->enter($__internal_d09cd85fbf9a84952749801a81d238856103f16300c056f74ccdb5a9e7303d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_21401f9749c1bc0fc132cfb07ae1198cbe81e01af332a6fc36178e81505f1182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21401f9749c1bc0fc132cfb07ae1198cbe81e01af332a6fc36178e81505f1182->enter($__internal_21401f9749c1bc0fc132cfb07ae1198cbe81e01af332a6fc36178e81505f1182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_d09cd85fbf9a84952749801a81d238856103f16300c056f74ccdb5a9e7303d9c->leave($__internal_d09cd85fbf9a84952749801a81d238856103f16300c056f74ccdb5a9e7303d9c_prof);

        
        $__internal_21401f9749c1bc0fc132cfb07ae1198cbe81e01af332a6fc36178e81505f1182->leave($__internal_21401f9749c1bc0fc132cfb07ae1198cbe81e01af332a6fc36178e81505f1182_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
