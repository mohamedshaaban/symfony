<?php

/* SyliusShopBundle:Contact:request.html.twig */
class __TwigTemplate_355eb3b2db0ef62cc5d63d122a6d336cae24b9c598002d9471cc063f9277521e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Contact:request.html.twig", 1);
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
        $__internal_cfbb234786fcc63bbba42f49c9fd241e675f26e156e88211a2f17e86c901f26d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfbb234786fcc63bbba42f49c9fd241e675f26e156e88211a2f17e86c901f26d->enter($__internal_cfbb234786fcc63bbba42f49c9fd241e675f26e156e88211a2f17e86c901f26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Contact:request.html.twig"));

        $__internal_c351e608595fb64050969f270a3b5de34fa6e8c871ea539fe2eb257aa2f35f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c351e608595fb64050969f270a3b5de34fa6e8c871ea539fe2eb257aa2f35f1b->enter($__internal_c351e608595fb64050969f270a3b5de34fa6e8c871ea539fe2eb257aa2f35f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Contact:request.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfbb234786fcc63bbba42f49c9fd241e675f26e156e88211a2f17e86c901f26d->leave($__internal_cfbb234786fcc63bbba42f49c9fd241e675f26e156e88211a2f17e86c901f26d_prof);

        
        $__internal_c351e608595fb64050969f270a3b5de34fa6e8c871ea539fe2eb257aa2f35f1b->leave($__internal_c351e608595fb64050969f270a3b5de34fa6e8c871ea539fe2eb257aa2f35f1b_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_e46d50bdcf74b6ff0a26c8b767fe3a6a1de564935e2e407d632db2cee07976dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e46d50bdcf74b6ff0a26c8b767fe3a6a1de564935e2e407d632db2cee07976dc->enter($__internal_e46d50bdcf74b6ff0a26c8b767fe3a6a1de564935e2e407d632db2cee07976dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_43926521b107550671d67d7f8cae94aa0eabd2eb81634ada9fc1c0016932ebf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43926521b107550671d67d7f8cae94aa0eabd2eb81634ada9fc1c0016932ebf2->enter($__internal_43926521b107550671d67d7f8cae94aa0eabd2eb81634ada9fc1c0016932ebf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui two column centered grid\">
        <div class=\"column\">
            <h1 class=\"ui header\">
                <i class=\"circular mail icon\"></i>
                <div class=\"content\">
                    ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.contact_us"), "html", null, true);
        echo "
                    <div class=\"sub header\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.use_the_contact_form_below_to_send_us_a_message"), "html", null, true);
        echo "</div>

                    ";
        // line 15
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.contact.request.after_content_header"));
        echo "
                </div>
            </h1>
            <div class=\"ui segment\">
                ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_contact_request"), "attr" => array("class" => "ui large loadable form", "novalidate" => "novalidate")));
        echo "
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "email", array()), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "message", array()), 'row');
        echo "

                ";
        // line 23
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.contact.request.form", array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()))));
        echo "

                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "_token", array()), 'row');
        echo "
                <button type=\"submit\" class=\"ui fluid large primary submit button\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.send"), "html", null, true);
        echo "</button>
                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_43926521b107550671d67d7f8cae94aa0eabd2eb81634ada9fc1c0016932ebf2->leave($__internal_43926521b107550671d67d7f8cae94aa0eabd2eb81634ada9fc1c0016932ebf2_prof);

        
        $__internal_e46d50bdcf74b6ff0a26c8b767fe3a6a1de564935e2e407d632db2cee07976dc->leave($__internal_e46d50bdcf74b6ff0a26c8b767fe3a6a1de564935e2e407d632db2cee07976dc_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Contact:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 27,  98 => 26,  94 => 25,  89 => 23,  84 => 21,  80 => 20,  76 => 19,  69 => 15,  64 => 13,  60 => 12,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% block content %}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui two column centered grid\">
        <div class=\"column\">
            <h1 class=\"ui header\">
                <i class=\"circular mail icon\"></i>
                <div class=\"content\">
                    {{ 'sylius.ui.contact_us'|trans }}
                    <div class=\"sub header\">{{ 'sylius.ui.use_the_contact_form_below_to_send_us_a_message'|trans }}</div>

                    {{ sonata_block_render_event('sylius.shop.contact.request.after_content_header') }}
                </div>
            </h1>
            <div class=\"ui segment\">
                {{ form_start(form, {'action': path('sylius_shop_contact_request'), 'attr': {'class': 'ui large loadable form', 'novalidate': 'novalidate'}}) }}
                {{ form_row(form.email) }}
                {{ form_row(form.message) }}

                {{ sonata_block_render_event('sylius.shop.contact.request.form', {'form': form}) }}

                {{ form_row(form._token) }}
                <button type=\"submit\" class=\"ui fluid large primary submit button\">{{ 'sylius.ui.send'|trans }}</button>
                {{ form_end(form, {'render_rest': false}) }}
            </div>
        </div>
    </div>
{% endblock %}
", "SyliusShopBundle:Contact:request.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Contact/request.html.twig");
    }
}
