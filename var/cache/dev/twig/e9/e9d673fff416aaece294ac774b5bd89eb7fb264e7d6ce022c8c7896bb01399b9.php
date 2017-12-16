<?php

/* SyliusShopBundle:Email:passwordReset.html.twig */
class __TwigTemplate_78ae2cbeb02a851c65e8e7d914f67f6022b82e18e9c6352370a1345089f12a3d extends Twig_Template
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
        $__internal_ee9ed40b9c93ada8d742505e5d4bd49252e5d98f0b5500dbd81cea35489e86fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee9ed40b9c93ada8d742505e5d4bd49252e5d98f0b5500dbd81cea35489e86fa->enter($__internal_ee9ed40b9c93ada8d742505e5d4bd49252e5d98f0b5500dbd81cea35489e86fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:passwordReset.html.twig"));

        $__internal_9374b71c029ebd9e2f9afe9f1f09a6c4e0abc870a2be526e3b312b46154dec04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9374b71c029ebd9e2f9afe9f1f09a6c4e0abc870a2be526e3b312b46154dec04->enter($__internal_9374b71c029ebd9e2f9afe9f1f09a6c4e0abc870a2be526e3b312b46154dec04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:passwordReset.html.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_ee9ed40b9c93ada8d742505e5d4bd49252e5d98f0b5500dbd81cea35489e86fa->leave($__internal_ee9ed40b9c93ada8d742505e5d4bd49252e5d98f0b5500dbd81cea35489e86fa_prof);

        
        $__internal_9374b71c029ebd9e2f9afe9f1f09a6c4e0abc870a2be526e3b312b46154dec04->leave($__internal_9374b71c029ebd9e2f9afe9f1f09a6c4e0abc870a2be526e3b312b46154dec04_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7fe2fceb6a11ff43801750d811e32597a4ba670331eea482468b4fbb46eb648d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fe2fceb6a11ff43801750d811e32597a4ba670331eea482468b4fbb46eb648d->enter($__internal_7fe2fceb6a11ff43801750d811e32597a4ba670331eea482468b4fbb46eb648d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c8b1e479a7f771d30611362548b41e6d9000bc41076c120ebcc8bf2c9152a66b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b1e479a7f771d30611362548b41e6d9000bc41076c120ebcc8bf2c9152a66b->enter($__internal_c8b1e479a7f771d30611362548b41e6d9000bc41076c120ebcc8bf2c9152a66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 2
        echo "    Password reset
";
        
        $__internal_c8b1e479a7f771d30611362548b41e6d9000bc41076c120ebcc8bf2c9152a66b->leave($__internal_c8b1e479a7f771d30611362548b41e6d9000bc41076c120ebcc8bf2c9152a66b_prof);

        
        $__internal_7fe2fceb6a11ff43801750d811e32597a4ba670331eea482468b4fbb46eb648d->leave($__internal_7fe2fceb6a11ff43801750d811e32597a4ba670331eea482468b4fbb46eb648d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7280e5fee3a361e1ca73045ca910a66db5bfdc56e93278f0f638fe195ea6ac31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7280e5fee3a361e1ca73045ca910a66db5bfdc56e93278f0f638fe195ea6ac31->enter($__internal_7280e5fee3a361e1ca73045ca910a66db5bfdc56e93278f0f638fe195ea6ac31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_763a28c61d611b02055fde0605bef5dc88a2afeb1c44168b883a4f64330539d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763a28c61d611b02055fde0605bef5dc88a2afeb1c44168b883a4f64330539d6->enter($__internal_763a28c61d611b02055fde0605bef5dc88a2afeb1c44168b883a4f64330539d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context["url"] = (( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new Twig_Error_Runtime('Variable "channel" does not exist.', 6, $this->getSourceContext()); })()), "hostname", array()))) ? ((("http://" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new Twig_Error_Runtime('Variable "channel" does not exist.', 6, $this->getSourceContext()); })()), "hostname", array())) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_password_reset", array("token" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "passwordResetToken", array()))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_password_reset", array("token" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "passwordResetToken", array())))));
        // line 7
        echo "    ";
        // line 8
        echo "        <h3>Hello ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 8, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</h3>

        To reset your password - please visit <a href=\"";
        // line 10
        echo (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 10, $this->getSourceContext()); })());
        echo "\">";
        echo (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 10, $this->getSourceContext()); })());
        echo "</a>
        <br/><br/>
        Regards, the Team.
    ";
        
        $__internal_763a28c61d611b02055fde0605bef5dc88a2afeb1c44168b883a4f64330539d6->leave($__internal_763a28c61d611b02055fde0605bef5dc88a2afeb1c44168b883a4f64330539d6_prof);

        
        $__internal_7280e5fee3a361e1ca73045ca910a66db5bfdc56e93278f0f638fe195ea6ac31->leave($__internal_7280e5fee3a361e1ca73045ca910a66db5bfdc56e93278f0f638fe195ea6ac31_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Email:passwordReset.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 10,  76 => 8,  74 => 7,  71 => 6,  62 => 5,  51 => 2,  42 => 1,  32 => 5,  29 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
    Password reset
{% endblock %}

{% block body %}
    {% set url = channel.hostname is not null ? 'http://' ~ channel.hostname ~ path('sylius_shop_password_reset', { 'token': user.passwordResetToken}) : url('sylius_shop_password_reset', { 'token': user.passwordResetToken}) %}
    {% autoescape %}
        <h3>Hello {{ user.username }}</h3>

        To reset your password - please visit <a href=\"{{ url|raw }}\">{{ url|raw }}</a>
        <br/><br/>
        Regards, the Team.
    {% endautoescape %}
{% endblock %}
", "SyliusShopBundle:Email:passwordReset.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Email/passwordReset.html.twig");
    }
}
