<?php

/* SyliusShopBundle:Account/Order/Label/State:fulfilled.html.twig */
class __TwigTemplate_7165bd24c5aef44798cb66d778b512d29e85a9b4151bef1a5845ce072eda146d extends Twig_Template
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
        $__internal_7c422112b845a4e718c3590899ae346d7139a664fa92fb83217adfc3ee16213b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c422112b845a4e718c3590899ae346d7139a664fa92fb83217adfc3ee16213b->enter($__internal_7c422112b845a4e718c3590899ae346d7139a664fa92fb83217adfc3ee16213b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Label/State:fulfilled.html.twig"));

        $__internal_aa68a59deec6642068e1e904488c14d6413aea4a83c0d351e2a025246944db8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa68a59deec6642068e1e904488c14d6413aea4a83c0d351e2a025246944db8f->enter($__internal_aa68a59deec6642068e1e904488c14d6413aea4a83c0d351e2a025246944db8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Label/State:fulfilled.html.twig"));

        // line 1
        echo "<span class=\"ui green label\">
    <i class=\"check icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->getSourceContext()); })())), "html", null, true);
        echo "
</span>
";
        
        $__internal_7c422112b845a4e718c3590899ae346d7139a664fa92fb83217adfc3ee16213b->leave($__internal_7c422112b845a4e718c3590899ae346d7139a664fa92fb83217adfc3ee16213b_prof);

        
        $__internal_aa68a59deec6642068e1e904488c14d6413aea4a83c0d351e2a025246944db8f->leave($__internal_aa68a59deec6642068e1e904488c14d6413aea4a83c0d351e2a025246944db8f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order/Label/State:fulfilled.html.twig";
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
        return new Twig_Source("<span class=\"ui green label\">
    <i class=\"check icon\"></i>
    {{ value|trans }}
</span>
", "SyliusShopBundle:Account/Order/Label/State:fulfilled.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/Order/Label/State/fulfilled.html.twig");
    }
}
