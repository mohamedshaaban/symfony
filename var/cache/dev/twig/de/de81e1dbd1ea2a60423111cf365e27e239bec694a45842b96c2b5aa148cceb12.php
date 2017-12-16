<?php

/* SyliusShopBundle:Account/Order:show.html.twig */
class __TwigTemplate_f8f1166b9c2da311ad2cafff218bdb5f48e8956c5bde56644c1bd8907f5185c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/layout.html.twig", "SyliusShopBundle:Account/Order:show.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'subcontent' => array($this, 'block_subcontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/Account/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2a4ba892ad3c92a8bae532c9a01ec583f8d70ba1095760bc49c8b684cc6c874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2a4ba892ad3c92a8bae532c9a01ec583f8d70ba1095760bc49c8b684cc6c874->enter($__internal_e2a4ba892ad3c92a8bae532c9a01ec583f8d70ba1095760bc49c8b684cc6c874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order:show.html.twig"));

        $__internal_5be9ade4b1b6e28e645c865bae511bb0fa8a47de87bc8f48f92e745a27a6cc07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be9ade4b1b6e28e645c865bae511bb0fa8a47de87bc8f48f92e745a27a6cc07->enter($__internal_5be9ade4b1b6e28e645c865bae511bb0fa8a47de87bc8f48f92e745a27a6cc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2a4ba892ad3c92a8bae532c9a01ec583f8d70ba1095760bc49c8b684cc6c874->leave($__internal_e2a4ba892ad3c92a8bae532c9a01ec583f8d70ba1095760bc49c8b684cc6c874_prof);

        
        $__internal_5be9ade4b1b6e28e645c865bae511bb0fa8a47de87bc8f48f92e745a27a6cc07->leave($__internal_5be9ade4b1b6e28e645c865bae511bb0fa8a47de87bc8f48f92e745a27a6cc07_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_2b14405e533be23c82472a87b455a15365fc7891e7da78c989d9e8fa25bc4821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b14405e533be23c82472a87b455a15365fc7891e7da78c989d9e8fa25bc4821->enter($__internal_2b14405e533be23c82472a87b455a15365fc7891e7da78c989d9e8fa25bc4821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_7367d84be5273e51c5e8d1e7801748df31c046c1bc7750e938d0db2c59368e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7367d84be5273e51c5e8d1e7801748df31c046c1bc7750e938d0db2c59368e59->enter($__internal_7367d84be5273e51c5e8d1e7801748df31c046c1bc7750e938d0db2c59368e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    ";
        $this->loadTemplate("@SyliusShop/Account/Order/Show/_breadcrumb.html.twig", "SyliusShopBundle:Account/Order:show.html.twig", 4)->display($context);
        
        $__internal_7367d84be5273e51c5e8d1e7801748df31c046c1bc7750e938d0db2c59368e59->leave($__internal_7367d84be5273e51c5e8d1e7801748df31c046c1bc7750e938d0db2c59368e59_prof);

        
        $__internal_2b14405e533be23c82472a87b455a15365fc7891e7da78c989d9e8fa25bc4821->leave($__internal_2b14405e533be23c82472a87b455a15365fc7891e7da78c989d9e8fa25bc4821_prof);

    }

    // line 7
    public function block_subcontent($context, array $blocks = array())
    {
        $__internal_0aaa9e2b5e0bb0d78d11d7fa80022d9e94c5176bed206011e281fed38e612784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aaa9e2b5e0bb0d78d11d7fa80022d9e94c5176bed206011e281fed38e612784->enter($__internal_0aaa9e2b5e0bb0d78d11d7fa80022d9e94c5176bed206011e281fed38e612784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_bc2f53bf8526a37a634c565cd3e078792fe218007a79053f78657a41294da4cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc2f53bf8526a37a634c565cd3e078792fe218007a79053f78657a41294da4cf->enter($__internal_bc2f53bf8526a37a634c565cd3e078792fe218007a79053f78657a41294da4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        // line 8
        echo "    ";
        $this->loadTemplate("@SyliusShop/Account/Order/Show/_header.html.twig", "SyliusShopBundle:Account/Order:show.html.twig", 8)->display($context);
        // line 9
        echo "
    ";
        // line 10
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.order.show.after_content_header", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 10, $this->getSourceContext()); })()))));
        echo "

    ";
        // line 12
        $this->loadTemplate("@SyliusShop/Common/Order/_summary.html.twig", "SyliusShopBundle:Account/Order:show.html.twig", 12)->display($context);
        // line 13
        echo "
    ";
        // line 14
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.order.show.after_summary", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 14, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_bc2f53bf8526a37a634c565cd3e078792fe218007a79053f78657a41294da4cf->leave($__internal_bc2f53bf8526a37a634c565cd3e078792fe218007a79053f78657a41294da4cf_prof);

        
        $__internal_0aaa9e2b5e0bb0d78d11d7fa80022d9e94c5176bed206011e281fed38e612784->leave($__internal_0aaa9e2b5e0bb0d78d11d7fa80022d9e94c5176bed206011e281fed38e612784_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 14,  83 => 13,  81 => 12,  76 => 10,  73 => 9,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Account/layout.html.twig' %}

{% block breadcrumb %}
    {% include '@SyliusShop/Account/Order/Show/_breadcrumb.html.twig' %}
{% endblock %}

{% block subcontent %}
    {% include '@SyliusShop/Account/Order/Show/_header.html.twig' %}

    {{ sonata_block_render_event('sylius.shop.account.order.show.after_content_header', {'order': order}) }}

    {% include '@SyliusShop/Common/Order/_summary.html.twig' %}

    {{ sonata_block_render_event('sylius.shop.account.order.show.after_summary', {'order': order}) }}
{% endblock %}
", "SyliusShopBundle:Account/Order:show.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/Order/show.html.twig");
    }
}
