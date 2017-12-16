<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_4271072246018cea338cb5ee1b6be53b876c3fd7420cab5df57a61ea7d765ccf extends Twig_Template
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
        $__internal_427a895a27720310e82c6089f2bfc63ee1f5514de66afc5f7a2bdba440afc86c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_427a895a27720310e82c6089f2bfc63ee1f5514de66afc5f7a2bdba440afc86c->enter($__internal_427a895a27720310e82c6089f2bfc63ee1f5514de66afc5f7a2bdba440afc86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_f51845723cd82fa19ec1a634374e782152da692644ffa66127eb4aeea8f9c882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51845723cd82fa19ec1a634374e782152da692644ffa66127eb4aeea8f9c882->enter($__internal_f51845723cd82fa19ec1a634374e782152da692644ffa66127eb4aeea8f9c882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_427a895a27720310e82c6089f2bfc63ee1f5514de66afc5f7a2bdba440afc86c->leave($__internal_427a895a27720310e82c6089f2bfc63ee1f5514de66afc5f7a2bdba440afc86c_prof);

        
        $__internal_f51845723cd82fa19ec1a634374e782152da692644ffa66127eb4aeea8f9c882->leave($__internal_f51845723cd82fa19ec1a634374e782152da692644ffa66127eb4aeea8f9c882_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
