<?php

/* SyliusShopBundle:Product/Show:_outOfStock.html.twig */
class __TwigTemplate_1ee580d82150c1b4e0192a11be930efa3430213184d02b4e2b6020a6f3968cf7 extends Twig_Template
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
        $__internal_c64cd98947d1a5c9d6fb0788a6ec6dc4bb95a35a263d626568a3d0d2bf3860f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c64cd98947d1a5c9d6fb0788a6ec6dc4bb95a35a263d626568a3d0d2bf3860f7->enter($__internal_c64cd98947d1a5c9d6fb0788a6ec6dc4bb95a35a263d626568a3d0d2bf3860f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_outOfStock.html.twig"));

        $__internal_c28f68039ca73291da3e982a75bca6b68a93da184601d4ee07e3eb9af668e94e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28f68039ca73291da3e982a75bca6b68a93da184601d4ee07e3eb9af668e94e->enter($__internal_c28f68039ca73291da3e982a75bca6b68a93da184601d4ee07e3eb9af668e94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_outOfStock.html.twig"));

        // line 1
        echo "<div class=\"ui small negative icon message\" id=\"sylius-product-out-of-stock\">
    <i class=\"remove icon\"></i>
    <div class=\"content\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.out_of_stock"), "html", null, true);
        echo "
    </div>
</div>
";
        
        $__internal_c64cd98947d1a5c9d6fb0788a6ec6dc4bb95a35a263d626568a3d0d2bf3860f7->leave($__internal_c64cd98947d1a5c9d6fb0788a6ec6dc4bb95a35a263d626568a3d0d2bf3860f7_prof);

        
        $__internal_c28f68039ca73291da3e982a75bca6b68a93da184601d4ee07e3eb9af668e94e->leave($__internal_c28f68039ca73291da3e982a75bca6b68a93da184601d4ee07e3eb9af668e94e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_outOfStock.html.twig";
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
        return new Twig_Source("<div class=\"ui small negative icon message\" id=\"sylius-product-out-of-stock\">
    <i class=\"remove icon\"></i>
    <div class=\"content\">
        {{ 'sylius.ui.out_of_stock'|trans }}
    </div>
</div>
", "SyliusShopBundle:Product/Show:_outOfStock.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_outOfStock.html.twig");
    }
}
