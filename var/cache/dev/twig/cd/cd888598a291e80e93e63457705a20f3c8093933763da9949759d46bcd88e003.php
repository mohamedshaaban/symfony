<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_df4a932cce72096e9eb4a246b5e86af45ab502413c92883b6afab027210467c4 extends Twig_Template
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
        $__internal_d999b5aa497b5cdb3f11276f48402eb97801185d357828af8a8051fdc5833e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d999b5aa497b5cdb3f11276f48402eb97801185d357828af8a8051fdc5833e5d->enter($__internal_d999b5aa497b5cdb3f11276f48402eb97801185d357828af8a8051fdc5833e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_c2556a9ad04b72bf45e8a5c9dba9c70ecb6c33fbc7363e9232e76618312a7cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2556a9ad04b72bf45e8a5c9dba9c70ecb6c33fbc7363e9232e76618312a7cc5->enter($__internal_c2556a9ad04b72bf45e8a5c9dba9c70ecb6c33fbc7363e9232e76618312a7cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d999b5aa497b5cdb3f11276f48402eb97801185d357828af8a8051fdc5833e5d->leave($__internal_d999b5aa497b5cdb3f11276f48402eb97801185d357828af8a8051fdc5833e5d_prof);

        
        $__internal_c2556a9ad04b72bf45e8a5c9dba9c70ecb6c33fbc7363e9232e76618312a7cc5->leave($__internal_c2556a9ad04b72bf45e8a5c9dba9c70ecb6c33fbc7363e9232e76618312a7cc5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
