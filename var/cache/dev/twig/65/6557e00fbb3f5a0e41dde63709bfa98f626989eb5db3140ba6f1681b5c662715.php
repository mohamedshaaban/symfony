<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_54dc2c9af56faa747a4a0e1b69797e317aa27090516676a01b9135d6a7e3be61 extends Twig_Template
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
        $__internal_203ce1d33dc49833f3f6070b4675f6183c7ee49f8ddf4fb66a23a4eaf7b84b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_203ce1d33dc49833f3f6070b4675f6183c7ee49f8ddf4fb66a23a4eaf7b84b76->enter($__internal_203ce1d33dc49833f3f6070b4675f6183c7ee49f8ddf4fb66a23a4eaf7b84b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_e09353a66bbc9d9b1c529a06311f5b45d9bb02400cf80e01577616a95d740106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09353a66bbc9d9b1c529a06311f5b45d9bb02400cf80e01577616a95d740106->enter($__internal_e09353a66bbc9d9b1c529a06311f5b45d9bb02400cf80e01577616a95d740106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_203ce1d33dc49833f3f6070b4675f6183c7ee49f8ddf4fb66a23a4eaf7b84b76->leave($__internal_203ce1d33dc49833f3f6070b4675f6183c7ee49f8ddf4fb66a23a4eaf7b84b76_prof);

        
        $__internal_e09353a66bbc9d9b1c529a06311f5b45d9bb02400cf80e01577616a95d740106->leave($__internal_e09353a66bbc9d9b1c529a06311f5b45d9bb02400cf80e01577616a95d740106_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
