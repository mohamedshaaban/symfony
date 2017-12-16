<?php

/* SyliusShopBundle:Account/Order/Grid/Field:total.html.twig */
class __TwigTemplate_c7bd52b9e559f5bc47b407311c256f0dd8473f46c5d8b125d8ed48f8129b73e2 extends Twig_Template
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
        $__internal_14dfbddd53ddc7560a19601c76f6bc72028ba7aa77f47145c0a8ba850a7d634b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14dfbddd53ddc7560a19601c76f6bc72028ba7aa77f47145c0a8ba850a7d634b->enter($__internal_14dfbddd53ddc7560a19601c76f6bc72028ba7aa77f47145c0a8ba850a7d634b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Grid/Field:total.html.twig"));

        $__internal_375d513ad44150f444bf8c09829172123e8b551ac796c61d93e3e86c55aede81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375d513ad44150f444bf8c09829172123e8b551ac796c61d93e3e86c55aede81->enter($__internal_375d513ad44150f444bf8c09829172123e8b551ac796c61d93e3e86c55aede81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Grid/Field:total.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Account/Order/Grid/Field:total.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 3, $this->getSourceContext()); })()), "total", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 3, $this->getSourceContext()); })()), "currencyCode", array()));
        echo "
";
        
        $__internal_14dfbddd53ddc7560a19601c76f6bc72028ba7aa77f47145c0a8ba850a7d634b->leave($__internal_14dfbddd53ddc7560a19601c76f6bc72028ba7aa77f47145c0a8ba850a7d634b_prof);

        
        $__internal_375d513ad44150f444bf8c09829172123e8b551ac796c61d93e3e86c55aede81->leave($__internal_375d513ad44150f444bf8c09829172123e8b551ac796c61d93e3e86c55aede81_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order/Grid/Field:total.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

{{ money.format(data.total, data.currencyCode) }}
", "SyliusShopBundle:Account/Order/Grid/Field:total.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/Order/Grid/Field/total.html.twig");
    }
}
