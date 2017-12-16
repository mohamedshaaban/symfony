<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b1748c3dabbaaa565aebd4f033437ea0324015aad7439fa32ad27df0eaac23b8 extends Twig_Template
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
        $__internal_e6a706007268a9965b0395a66ac1edc090ae5aedb8f6ab6e4966d2f29e1b7ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6a706007268a9965b0395a66ac1edc090ae5aedb8f6ab6e4966d2f29e1b7ce4->enter($__internal_e6a706007268a9965b0395a66ac1edc090ae5aedb8f6ab6e4966d2f29e1b7ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_662192a643dd06edce1e85c9361cbf8b15749e8dd6c979c1acafc0689ed65e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662192a643dd06edce1e85c9361cbf8b15749e8dd6c979c1acafc0689ed65e96->enter($__internal_662192a643dd06edce1e85c9361cbf8b15749e8dd6c979c1acafc0689ed65e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_e6a706007268a9965b0395a66ac1edc090ae5aedb8f6ab6e4966d2f29e1b7ce4->leave($__internal_e6a706007268a9965b0395a66ac1edc090ae5aedb8f6ab6e4966d2f29e1b7ce4_prof);

        
        $__internal_662192a643dd06edce1e85c9361cbf8b15749e8dd6c979c1acafc0689ed65e96->leave($__internal_662192a643dd06edce1e85c9361cbf8b15749e8dd6c979c1acafc0689ed65e96_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
