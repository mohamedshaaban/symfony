<?php

/* SyliusShopBundle:Account/Order/Grid/Field:number.html.twig */
class __TwigTemplate_0c13a5a15fe40f535d9144bcbaccd311299e42ae91b955a8b162f7b19a824e41 extends Twig_Template
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
        $__internal_a2579c67e7f029214550edcc09a699e4476282f35d23ff9aa2d75705805a6293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2579c67e7f029214550edcc09a699e4476282f35d23ff9aa2d75705805a6293->enter($__internal_a2579c67e7f029214550edcc09a699e4476282f35d23ff9aa2d75705805a6293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Grid/Field:number.html.twig"));

        $__internal_5c58cbaaa4fbaa672a4c6c3a55f4afb15498a1cc40a1fcf57086fcf9b09ca5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c58cbaaa4fbaa672a4c6c3a55f4afb15498a1cc40a1fcf57086fcf9b09ca5ea->enter($__internal_5c58cbaaa4fbaa672a4c6c3a55f4afb15498a1cc40a1fcf57086fcf9b09ca5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Grid/Field:number.html.twig"));

        // line 1
        echo "#";
        echo twig_escape_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "
";
        
        $__internal_a2579c67e7f029214550edcc09a699e4476282f35d23ff9aa2d75705805a6293->leave($__internal_a2579c67e7f029214550edcc09a699e4476282f35d23ff9aa2d75705805a6293_prof);

        
        $__internal_5c58cbaaa4fbaa672a4c6c3a55f4afb15498a1cc40a1fcf57086fcf9b09ca5ea->leave($__internal_5c58cbaaa4fbaa672a4c6c3a55f4afb15498a1cc40a1fcf57086fcf9b09ca5ea_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order/Grid/Field:number.html.twig";
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
        return new Twig_Source("#{{ data }}
", "SyliusShopBundle:Account/Order/Grid/Field:number.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/Order/Grid/Field/number.html.twig");
    }
}
