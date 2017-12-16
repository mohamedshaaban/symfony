<?php

/* SyliusShopBundle:Email:orderConfirmation.html.twig */
class __TwigTemplate_da10795c1b05b2a22c94722082fdb7f86e377a02ee429aa6263ab5f2c87cc671 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4474033572bd78679823738dd331ab1188b9df4e764813731f1a8d11aa299977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4474033572bd78679823738dd331ab1188b9df4e764813731f1a8d11aa299977->enter($__internal_4474033572bd78679823738dd331ab1188b9df4e764813731f1a8d11aa299977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:orderConfirmation.html.twig"));

        $__internal_35daa249ee7ec2572bd84f99537cf01ec7daaf3d48a1a6ff794eee59d7cd582e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35daa249ee7ec2572bd84f99537cf01ec7daaf3d48a1a6ff794eee59d7cd582e->enter($__internal_35daa249ee7ec2572bd84f99537cf01ec7daaf3d48a1a6ff794eee59d7cd582e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:orderConfirmation.html.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_4474033572bd78679823738dd331ab1188b9df4e764813731f1a8d11aa299977->leave($__internal_4474033572bd78679823738dd331ab1188b9df4e764813731f1a8d11aa299977_prof);

        
        $__internal_35daa249ee7ec2572bd84f99537cf01ec7daaf3d48a1a6ff794eee59d7cd582e->leave($__internal_35daa249ee7ec2572bd84f99537cf01ec7daaf3d48a1a6ff794eee59d7cd582e_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8b1eca231a7b1e8dc65cd37ce8d58fb224ca9a81e113197ec3255af4c4343fd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b1eca231a7b1e8dc65cd37ce8d58fb224ca9a81e113197ec3255af4c4343fd5->enter($__internal_8b1eca231a7b1e8dc65cd37ce8d58fb224ca9a81e113197ec3255af4c4343fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4022b02368ba72d2ddf972ab3c4a98cf1bd1e59e29ded03aa2e356244cb685b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4022b02368ba72d2ddf972ab3c4a98cf1bd1e59e29ded03aa2e356244cb685b9->enter($__internal_4022b02368ba72d2ddf972ab3c4a98cf1bd1e59e29ded03aa2e356244cb685b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 2
        echo "    Order confirmation
";
        
        $__internal_4022b02368ba72d2ddf972ab3c4a98cf1bd1e59e29ded03aa2e356244cb685b9->leave($__internal_4022b02368ba72d2ddf972ab3c4a98cf1bd1e59e29ded03aa2e356244cb685b9_prof);

        
        $__internal_8b1eca231a7b1e8dc65cd37ce8d58fb224ca9a81e113197ec3255af4c4343fd5->leave($__internal_8b1eca231a7b1e8dc65cd37ce8d58fb224ca9a81e113197ec3255af4c4343fd5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5d2865fae8c4a0668cadb21890e4e590b186f0b890cc4fe613408e835886f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d2865fae8c4a0668cadb21890e4e590b186f0b890cc4fe613408e835886f84->enter($__internal_a5d2865fae8c4a0668cadb21890e4e590b186f0b890cc4fe613408e835886f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e82cf0f362f4b15e89820b8e896833166653c70aa9a374935a9c657faca0fcd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82cf0f362f4b15e89820b8e896833166653c70aa9a374935a9c657faca0fcd0->enter($__internal_e82cf0f362f4b15e89820b8e896833166653c70aa9a374935a9c657faca0fcd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context["url"] = (( !(null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->getSourceContext()); })()), "channel", array()), "hostname", array()))) ? ((("http://" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->getSourceContext()); })()), "channel", array()), "hostname", array())) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_order_show", array("tokenValue" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->getSourceContext()); })()), "tokenValue", array()), "_locale" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->getSourceContext()); })()), "localeCode", array()))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_order_show", array("tokenValue" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->getSourceContext()); })()), "tokenValue", array()), "_locale" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->getSourceContext()); })()), "localeCode", array())))));
        // line 7
        echo "    ";
        // line 8
        echo "        Your order no. ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 8, $this->getSourceContext()); })()), "number", array()), "html", null, true);
        echo " has been successfully placed.
        <br/>
        To view order or change payment method - please visit <a href=\"";
        // line 10
        echo (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 10, $this->getSourceContext()); })());
        echo "\">";
        echo (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 10, $this->getSourceContext()); })());
        echo "</a>
        <br/><br/>
        Thank you for shopping at our store!
    ";
        
        $__internal_e82cf0f362f4b15e89820b8e896833166653c70aa9a374935a9c657faca0fcd0->leave($__internal_e82cf0f362f4b15e89820b8e896833166653c70aa9a374935a9c657faca0fcd0_prof);

        
        $__internal_a5d2865fae8c4a0668cadb21890e4e590b186f0b890cc4fe613408e835886f84->leave($__internal_a5d2865fae8c4a0668cadb21890e4e590b186f0b890cc4fe613408e835886f84_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Email:orderConfirmation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 10,  76 => 8,  74 => 7,  71 => 6,  62 => 5,  51 => 2,  42 => 1,  32 => 5,  29 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
    Order confirmation
{% endblock %}

{% block body %}
    {% set url = order.channel.hostname is not null ? 'http://' ~ order.channel.hostname ~ path('sylius_shop_order_show', {'tokenValue': order.tokenValue, '_locale': order.localeCode}) : url('sylius_shop_order_show', {'tokenValue': order.tokenValue, '_locale': order.localeCode}) %}
    {% autoescape %}
        Your order no. {{ order.number }} has been successfully placed.
        <br/>
        To view order or change payment method - please visit <a href=\"{{ url|raw }}\">{{ url|raw }}</a>
        <br/><br/>
        Thank you for shopping at our store!
    {% endautoescape %}
{% endblock %}
", "SyliusShopBundle:Email:orderConfirmation.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Email/orderConfirmation.html.twig");
    }
}
