<?php

/* SyliusShopBundle:Account/Order/Label/State:new.html.twig */
class __TwigTemplate_60fa49d8c63c8407ffa82bed1e25f2d2a9a9e165282381ae742631d901ab41f5 extends Twig_Template
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
        $__internal_5844e3b5f421c8e6a7604efb32f53aca31c362ed9289eae7817019686a89c0dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5844e3b5f421c8e6a7604efb32f53aca31c362ed9289eae7817019686a89c0dc->enter($__internal_5844e3b5f421c8e6a7604efb32f53aca31c362ed9289eae7817019686a89c0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Label/State:new.html.twig"));

        $__internal_a82a7d0a294c459ad668dabb9b9d28c769f09c698d99ef3c01abee61d32b38b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82a7d0a294c459ad668dabb9b9d28c769f09c698d99ef3c01abee61d32b38b6->enter($__internal_a82a7d0a294c459ad668dabb9b9d28c769f09c698d99ef3c01abee61d32b38b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Label/State:new.html.twig"));

        // line 1
        echo "<span class=\"ui blue label\">
    <i class=\"inbox icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->getSourceContext()); })())), "html", null, true);
        echo "
</span>
";
        
        $__internal_5844e3b5f421c8e6a7604efb32f53aca31c362ed9289eae7817019686a89c0dc->leave($__internal_5844e3b5f421c8e6a7604efb32f53aca31c362ed9289eae7817019686a89c0dc_prof);

        
        $__internal_a82a7d0a294c459ad668dabb9b9d28c769f09c698d99ef3c01abee61d32b38b6->leave($__internal_a82a7d0a294c459ad668dabb9b9d28c769f09c698d99ef3c01abee61d32b38b6_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order/Label/State:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"ui blue label\">
    <i class=\"inbox icon\"></i>
    {{ value|trans }}
</span>
", "SyliusShopBundle:Account/Order/Label/State:new.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/Order/Label/State/new.html.twig");
    }
}
