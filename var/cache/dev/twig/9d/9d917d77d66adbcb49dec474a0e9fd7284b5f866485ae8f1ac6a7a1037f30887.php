<?php

/* SyliusShopBundle:Email:verification.html.twig */
class __TwigTemplate_05861d0ac25117b059cc6b22523459936655fcc7af5aeed35a9630ae781b6e38 extends Twig_Template
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
        $__internal_285c25e2feab166a2e41ada66ec8c8f17ae3fe6f93ee08b445376addc8c079f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_285c25e2feab166a2e41ada66ec8c8f17ae3fe6f93ee08b445376addc8c079f9->enter($__internal_285c25e2feab166a2e41ada66ec8c8f17ae3fe6f93ee08b445376addc8c079f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:verification.html.twig"));

        $__internal_38b226daabb4b92b7f23eea55937f3e9f23e959f733cdada8b12e44ce7536e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b226daabb4b92b7f23eea55937f3e9f23e959f733cdada8b12e44ce7536e4b->enter($__internal_38b226daabb4b92b7f23eea55937f3e9f23e959f733cdada8b12e44ce7536e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:verification.html.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_285c25e2feab166a2e41ada66ec8c8f17ae3fe6f93ee08b445376addc8c079f9->leave($__internal_285c25e2feab166a2e41ada66ec8c8f17ae3fe6f93ee08b445376addc8c079f9_prof);

        
        $__internal_38b226daabb4b92b7f23eea55937f3e9f23e959f733cdada8b12e44ce7536e4b->leave($__internal_38b226daabb4b92b7f23eea55937f3e9f23e959f733cdada8b12e44ce7536e4b_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_41b8743d9c7151c622bb6b8424af217a5292d669960910ec5c05173cfc4c729b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41b8743d9c7151c622bb6b8424af217a5292d669960910ec5c05173cfc4c729b->enter($__internal_41b8743d9c7151c622bb6b8424af217a5292d669960910ec5c05173cfc4c729b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_72ed5df58b251a1ccf0569d83bcd34b17e85313cc9ff06b65f0ab58e8910cb2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ed5df58b251a1ccf0569d83bcd34b17e85313cc9ff06b65f0ab58e8910cb2b->enter($__internal_72ed5df58b251a1ccf0569d83bcd34b17e85313cc9ff06b65f0ab58e8910cb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 2
        echo "    Email address verification
";
        
        $__internal_72ed5df58b251a1ccf0569d83bcd34b17e85313cc9ff06b65f0ab58e8910cb2b->leave($__internal_72ed5df58b251a1ccf0569d83bcd34b17e85313cc9ff06b65f0ab58e8910cb2b_prof);

        
        $__internal_41b8743d9c7151c622bb6b8424af217a5292d669960910ec5c05173cfc4c729b->leave($__internal_41b8743d9c7151c622bb6b8424af217a5292d669960910ec5c05173cfc4c729b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b097cc83b349c1e21fc212429a6b752553c741ab07feedb69bbb9ed278438f88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b097cc83b349c1e21fc212429a6b752553c741ab07feedb69bbb9ed278438f88->enter($__internal_b097cc83b349c1e21fc212429a6b752553c741ab07feedb69bbb9ed278438f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23606b38c9b80811ca1633035a76e91e3a9bed0bb71c216c9426565a761ed4b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23606b38c9b80811ca1633035a76e91e3a9bed0bb71c216c9426565a761ed4b5->enter($__internal_23606b38c9b80811ca1633035a76e91e3a9bed0bb71c216c9426565a761ed4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context["url"] = (( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new Twig_Error_Runtime('Variable "channel" does not exist.', 6, $this->getSourceContext()); })()), "hostname", array()))) ? ((("http://" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new Twig_Error_Runtime('Variable "channel" does not exist.', 6, $this->getSourceContext()); })()), "hostname", array())) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_user_verification", array("token" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "emailVerificationToken", array()))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_user_verification", array("token" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "emailVerificationToken", array())))));
        // line 7
        echo "    ";
        // line 8
        echo "        To verify your email address - please visit <a href=\"";
        echo (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 8, $this->getSourceContext()); })());
        echo "\">";
        echo (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 8, $this->getSourceContext()); })());
        echo "</a>
    ";
        
        $__internal_23606b38c9b80811ca1633035a76e91e3a9bed0bb71c216c9426565a761ed4b5->leave($__internal_23606b38c9b80811ca1633035a76e91e3a9bed0bb71c216c9426565a761ed4b5_prof);

        
        $__internal_b097cc83b349c1e21fc212429a6b752553c741ab07feedb69bbb9ed278438f88->leave($__internal_b097cc83b349c1e21fc212429a6b752553c741ab07feedb69bbb9ed278438f88_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Email:verification.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 8,  74 => 7,  71 => 6,  62 => 5,  51 => 2,  42 => 1,  32 => 5,  29 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
    Email address verification
{% endblock %}

{% block body %}
    {% set url = channel.hostname is not null ? 'http://' ~ channel.hostname ~ path('sylius_shop_user_verification', { 'token': user.emailVerificationToken}) : url('sylius_shop_user_verification', { 'token': user.emailVerificationToken}) %}
    {% autoescape %}
        To verify your email address - please visit <a href=\"{{ url|raw }}\">{{ url|raw }}</a>
    {% endautoescape %}
{% endblock %}
", "SyliusShopBundle:Email:verification.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Email/verification.html.twig");
    }
}
