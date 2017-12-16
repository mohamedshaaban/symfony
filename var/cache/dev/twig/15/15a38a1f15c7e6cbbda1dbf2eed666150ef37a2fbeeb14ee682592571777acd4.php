<?php

/* @SyliusShop/Checkout/layout.html.twig */
class __TwigTemplate_a3edbfefd27db6c9b82e54a3b3950f7f4a3aa7041d31ceddc703064ad6e8754c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Checkout/layout.html.twig", 1);
        $this->blocks = array(
            'top' => array($this, 'block_top'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bfeaee27874ba30f46422aecc188ef39be787de2bc7f883a37dce2e42912d97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bfeaee27874ba30f46422aecc188ef39be787de2bc7f883a37dce2e42912d97->enter($__internal_2bfeaee27874ba30f46422aecc188ef39be787de2bc7f883a37dce2e42912d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/layout.html.twig"));

        $__internal_f488078b3a7dbcdf197a868e3385d8aeedacb58b6edc5f8ae584944d6cb41712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f488078b3a7dbcdf197a868e3385d8aeedacb58b6edc5f8ae584944d6cb41712->enter($__internal_f488078b3a7dbcdf197a868e3385d8aeedacb58b6edc5f8ae584944d6cb41712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bfeaee27874ba30f46422aecc188ef39be787de2bc7f883a37dce2e42912d97->leave($__internal_2bfeaee27874ba30f46422aecc188ef39be787de2bc7f883a37dce2e42912d97_prof);

        
        $__internal_f488078b3a7dbcdf197a868e3385d8aeedacb58b6edc5f8ae584944d6cb41712->leave($__internal_f488078b3a7dbcdf197a868e3385d8aeedacb58b6edc5f8ae584944d6cb41712_prof);

    }

    // line 3
    public function block_top($context, array $blocks = array())
    {
        $__internal_a4758377fa10038bb323d860fd55f4308935576ffa6bb7d6d073fc7065f4ecaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4758377fa10038bb323d860fd55f4308935576ffa6bb7d6d073fc7065f4ecaa->enter($__internal_a4758377fa10038bb323d860fd55f4308935576ffa6bb7d6d073fc7065f4ecaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        $__internal_2dcdf3d25ce6ed811bc3356e4adbb3d128bab6bfc0d92087032c2b45aa71195d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dcdf3d25ce6ed811bc3356e4adbb3d128bab6bfc0d92087032c2b45aa71195d->enter($__internal_2dcdf3d25ce6ed811bc3356e4adbb3d128bab6bfc0d92087032c2b45aa71195d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        // line 4
        echo "    ";
        
        $__internal_2dcdf3d25ce6ed811bc3356e4adbb3d128bab6bfc0d92087032c2b45aa71195d->leave($__internal_2dcdf3d25ce6ed811bc3356e4adbb3d128bab6bfc0d92087032c2b45aa71195d_prof);

        
        $__internal_a4758377fa10038bb323d860fd55f4308935576ffa6bb7d6d073fc7065f4ecaa->leave($__internal_a4758377fa10038bb323d860fd55f4308935576ffa6bb7d6d073fc7065f4ecaa_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_38e4eb28bc55a09073a6d0f5c9ad500e47b5afb4813026b52b90040ba88d3e9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e4eb28bc55a09073a6d0f5c9ad500e47b5afb4813026b52b90040ba88d3e9d->enter($__internal_38e4eb28bc55a09073a6d0f5c9ad500e47b5afb4813026b52b90040ba88d3e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_3da4994d0b272900c34a2e8a01f9653a140d2ebcdb89f975907ea8b568da42af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da4994d0b272900c34a2e8a01f9653a140d2ebcdb89f975907ea8b568da42af->enter($__internal_3da4994d0b272900c34a2e8a01f9653a140d2ebcdb89f975907ea8b568da42af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "    ";
        // line 9
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.before_header", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 9, $this->getSourceContext()); })()))));
        echo "

    ";
        // line 11
        $this->loadTemplate("@SyliusShop/Checkout/_header.html.twig", "@SyliusShop/Checkout/layout.html.twig", 11)->display($context);
        // line 12
        echo "
    ";
        // line 13
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.after_header", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3da4994d0b272900c34a2e8a01f9653a140d2ebcdb89f975907ea8b568da42af->leave($__internal_3da4994d0b272900c34a2e8a01f9653a140d2ebcdb89f975907ea8b568da42af_prof);

        
        $__internal_38e4eb28bc55a09073a6d0f5c9ad500e47b5afb4813026b52b90040ba88d3e9d->leave($__internal_38e4eb28bc55a09073a6d0f5c9ad500e47b5afb4813026b52b90040ba88d3e9d_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Checkout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 13,  79 => 12,  77 => 11,  71 => 9,  69 => 8,  60 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% block top %}
    {# Clear the topmost section. We do not want it in the checkout.  #}
{% endblock %}

{% block header %}
    {# Override the normal page header with a custom one for all checkout steps. #}
    {{ sonata_block_render_event('sylius.shop.checkout.address.before_header', {'order': order}) }}

    {% include '@SyliusShop/Checkout/_header.html.twig' %}

    {{ sonata_block_render_event('sylius.shop.checkout.address.after_header', {'order': order}) }}
{% endblock %}
", "@SyliusShop/Checkout/layout.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/layout.html.twig");
    }
}
