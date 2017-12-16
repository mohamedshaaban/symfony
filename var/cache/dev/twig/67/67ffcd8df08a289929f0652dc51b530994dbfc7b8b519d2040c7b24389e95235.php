<?php

/* SyliusShopBundle:ProductReview:create.html.twig */
class __TwigTemplate_e53402a69455d862798ed2283e4fbcad8d154cd9aec5bf6f63bd5dfe58efba5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:ProductReview:create.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fddb7cc8fb1f34ed5735789ab7eee704b402b95c724981c769a929f7ab8df2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fddb7cc8fb1f34ed5735789ab7eee704b402b95c724981c769a929f7ab8df2d->enter($__internal_1fddb7cc8fb1f34ed5735789ab7eee704b402b95c724981c769a929f7ab8df2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:ProductReview:create.html.twig"));

        $__internal_67e516a12599a1a78df910f3b2efa91dad1d742d9db7dc10f16da56284d3c696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e516a12599a1a78df910f3b2efa91dad1d742d9db7dc10f16da56284d3c696->enter($__internal_67e516a12599a1a78df910f3b2efa91dad1d742d9db7dc10f16da56284d3c696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:ProductReview:create.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 5
        $context["product"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product_review"]) || array_key_exists("product_review", $context) ? $context["product_review"] : (function () { throw new Twig_Error_Runtime('Variable "product_review" does not exist.', 5, $this->getSourceContext()); })()), "reviewSubject", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fddb7cc8fb1f34ed5735789ab7eee704b402b95c724981c769a929f7ab8df2d->leave($__internal_1fddb7cc8fb1f34ed5735789ab7eee704b402b95c724981c769a929f7ab8df2d_prof);

        
        $__internal_67e516a12599a1a78df910f3b2efa91dad1d742d9db7dc10f16da56284d3c696->leave($__internal_67e516a12599a1a78df910f3b2efa91dad1d742d9db7dc10f16da56284d3c696_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_20a542b0e626675de4e0a9f0cff704aa4897e0f2a4e54ac4967660fbd93ae9cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a542b0e626675de4e0a9f0cff704aa4897e0f2a4e54ac4967660fbd93ae9cf->enter($__internal_20a542b0e626675de4e0a9f0cff704aa4897e0f2a4e54ac4967660fbd93ae9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e073f85435a96f00ba64c00145e7b43dcb3cead1a1ce95ad12182292dc14b76f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e073f85435a96f00ba64c00145e7b43dcb3cead1a1ce95ad12182292dc14b76f->enter($__internal_e073f85435a96f00ba64c00145e7b43dcb3cead1a1ce95ad12182292dc14b76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui stackable grid\" id=\"reviews\">
        <div class=\"four wide column\">
            ";
        // line 11
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product_review.create.before_product_box", array("product_review" => (isset($context["product_review"]) || array_key_exists("product_review", $context) ? $context["product_review"] : (function () { throw new Twig_Error_Runtime('Variable "product_review" does not exist.', 11, $this->getSourceContext()); })()))));
        echo "

            ";
        // line 13
        $this->loadTemplate("@SyliusShop/Product/_box.html.twig", "SyliusShopBundle:ProductReview:create.html.twig", 13)->display($context);
        // line 14
        echo "
            ";
        // line 15
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product_review.create.after_product_box", array("product_review" => (isset($context["product_review"]) || array_key_exists("product_review", $context) ? $context["product_review"] : (function () { throw new Twig_Error_Runtime('Variable "product_review" does not exist.', 15, $this->getSourceContext()); })()))));
        echo "
        </div>
        <div class=\"twelve wide column\">
            <div class=\"ui segment\">
                <div class=\"ui dividing header\">
                    ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.write_your_own_review"), "html", null, true);
        echo "
                    <div class=\"sub header\">
                        ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.you_are_reviewing"), "html", null, true);
        echo " <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 22, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</strong>.
                    </div>
                </div>

                ";
        // line 26
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product_review.create.before_form", array("product_review" => (isset($context["product_review"]) || array_key_exists("product_review", $context) ? $context["product_review"] : (function () { throw new Twig_Error_Runtime('Variable "product_review" does not exist.', 26, $this->getSourceContext()); })()))));
        echo "

                ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_review_create", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 28, $this->getSourceContext()); })()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 28, $this->getSourceContext()); })()), "translation", array()), "locale", array()))), "attr" => array("class" => "ui loadable reply form", "novalidate" => "novalidate")));
        echo "
                    ";
        // line 29
        $this->loadTemplate("@SyliusShop/ProductReview/_form.html.twig", "SyliusShopBundle:ProductReview:create.html.twig", 29)->display($context);
        // line 30
        echo "
                    ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product_review.create.form", array("product_review" => (isset($context["product_review"]) || array_key_exists("product_review", $context) ? $context["product_review"] : (function () { throw new Twig_Error_Runtime('Variable "product_review" does not exist.', 31, $this->getSourceContext()); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()))));
        echo "

                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "_token", array()), 'row');
        echo "
                    <button type=\"submit\" class=\"ui blue labeled large icon submit button\">
                        <i class=\"icon check\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.add"), "html", null, true);
        echo "
                    </button>
                ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_e073f85435a96f00ba64c00145e7b43dcb3cead1a1ce95ad12182292dc14b76f->leave($__internal_e073f85435a96f00ba64c00145e7b43dcb3cead1a1ce95ad12182292dc14b76f_prof);

        
        $__internal_20a542b0e626675de4e0a9f0cff704aa4897e0f2a4e54ac4967660fbd93ae9cf->leave($__internal_20a542b0e626675de4e0a9f0cff704aa4897e0f2a4e54ac4967660fbd93ae9cf_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:ProductReview:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 37,  115 => 35,  110 => 33,  105 => 31,  102 => 30,  100 => 29,  96 => 28,  91 => 26,  82 => 22,  77 => 20,  69 => 15,  66 => 14,  64 => 13,  59 => 11,  54 => 8,  45 => 7,  35 => 1,  33 => 5,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% set product = product_review.reviewSubject %}

{% block content %}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui stackable grid\" id=\"reviews\">
        <div class=\"four wide column\">
            {{ sonata_block_render_event('sylius.shop.product_review.create.before_product_box', {'product_review': product_review}) }}

            {% include '@SyliusShop/Product/_box.html.twig' %}

            {{ sonata_block_render_event('sylius.shop.product_review.create.after_product_box', {'product_review': product_review}) }}
        </div>
        <div class=\"twelve wide column\">
            <div class=\"ui segment\">
                <div class=\"ui dividing header\">
                    {{ 'sylius.ui.write_your_own_review'|trans }}
                    <div class=\"sub header\">
                        {{ 'sylius.ui.you_are_reviewing'|trans }} <strong>{{ product.name }}</strong>.
                    </div>
                </div>

                {{ sonata_block_render_event('sylius.shop.product_review.create.before_form', {'product_review': product_review}) }}

                {{ form_start(form, {'action': path('sylius_shop_product_review_create', {'slug': product.slug, '_locale': product.translation.locale}), 'attr': {'class': 'ui loadable reply form', 'novalidate': 'novalidate'}}) }}
                    {% include '@SyliusShop/ProductReview/_form.html.twig' %}

                    {{ sonata_block_render_event('sylius.shop.product_review.create.form', {'product_review': product_review, 'form': form}) }}

                    {{ form_row(form._token) }}
                    <button type=\"submit\" class=\"ui blue labeled large icon submit button\">
                        <i class=\"icon check\"></i> {{ 'sylius.ui.add'|trans }}
                    </button>
                {{ form_end(form, {'render_rest': false}) }}
            </div>
        </div>
    </div>
{% endblock %}
", "SyliusShopBundle:ProductReview:create.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/ProductReview/create.html.twig");
    }
}
