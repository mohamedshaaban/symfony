<?php

/* SyliusShopBundle:Email:userRegistration.html.twig */
class __TwigTemplate_2bd683f29c440731d87a7dbb2c055242b82ca2c1ad76eb8d773530f1b1729832 extends Twig_Template
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
        $__internal_cf5dcb0ae9582de2aa55e0ed5fd63839a17036a32fe9ce25ccf866cd6b49ebf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf5dcb0ae9582de2aa55e0ed5fd63839a17036a32fe9ce25ccf866cd6b49ebf4->enter($__internal_cf5dcb0ae9582de2aa55e0ed5fd63839a17036a32fe9ce25ccf866cd6b49ebf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:userRegistration.html.twig"));

        $__internal_31fd29e2c09807b617e511f9e6011105dec82e7f4215fe78f7b041d18eb2996b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31fd29e2c09807b617e511f9e6011105dec82e7f4215fe78f7b041d18eb2996b->enter($__internal_31fd29e2c09807b617e511f9e6011105dec82e7f4215fe78f7b041d18eb2996b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:userRegistration.html.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_cf5dcb0ae9582de2aa55e0ed5fd63839a17036a32fe9ce25ccf866cd6b49ebf4->leave($__internal_cf5dcb0ae9582de2aa55e0ed5fd63839a17036a32fe9ce25ccf866cd6b49ebf4_prof);

        
        $__internal_31fd29e2c09807b617e511f9e6011105dec82e7f4215fe78f7b041d18eb2996b->leave($__internal_31fd29e2c09807b617e511f9e6011105dec82e7f4215fe78f7b041d18eb2996b_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_59fcb7e0b044e761e039e0f1eafa4445370a546e3325e22150b9de320a6f9832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59fcb7e0b044e761e039e0f1eafa4445370a546e3325e22150b9de320a6f9832->enter($__internal_59fcb7e0b044e761e039e0f1eafa4445370a546e3325e22150b9de320a6f9832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_6e40596dbc1f458df5130d90d0c44959e970a71ed844553f494a779ca9c2bc9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e40596dbc1f458df5130d90d0c44959e970a71ed844553f494a779ca9c2bc9c->enter($__internal_6e40596dbc1f458df5130d90d0c44959e970a71ed844553f494a779ca9c2bc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 2
        echo "    User registration
";
        
        $__internal_6e40596dbc1f458df5130d90d0c44959e970a71ed844553f494a779ca9c2bc9c->leave($__internal_6e40596dbc1f458df5130d90d0c44959e970a71ed844553f494a779ca9c2bc9c_prof);

        
        $__internal_59fcb7e0b044e761e039e0f1eafa4445370a546e3325e22150b9de320a6f9832->leave($__internal_59fcb7e0b044e761e039e0f1eafa4445370a546e3325e22150b9de320a6f9832_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_de394f75af583aa439a33ef6fee94af06ac2ad786a59fc557174082b0899c129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de394f75af583aa439a33ef6fee94af06ac2ad786a59fc557174082b0899c129->enter($__internal_de394f75af583aa439a33ef6fee94af06ac2ad786a59fc557174082b0899c129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d4ddfddaf4b0e55ede792407299aa5f9cbe8eedb2e0dc8968b4a3c5e6f2c18d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4ddfddaf4b0e55ede792407299aa5f9cbe8eedb2e0dc8968b4a3c5e6f2c18d->enter($__internal_1d4ddfddaf4b0e55ede792407299aa5f9cbe8eedb2e0dc8968b4a3c5e6f2c18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 7
        echo "        Welcome to our store!
        <br/><br/>
        You have just been registered.
        <br/>
        Thank you ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 11, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo ".
    ";
        
        $__internal_1d4ddfddaf4b0e55ede792407299aa5f9cbe8eedb2e0dc8968b4a3c5e6f2c18d->leave($__internal_1d4ddfddaf4b0e55ede792407299aa5f9cbe8eedb2e0dc8968b4a3c5e6f2c18d_prof);

        
        $__internal_de394f75af583aa439a33ef6fee94af06ac2ad786a59fc557174082b0899c129->leave($__internal_de394f75af583aa439a33ef6fee94af06ac2ad786a59fc557174082b0899c129_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Email:userRegistration.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 11,  73 => 7,  71 => 6,  62 => 5,  51 => 2,  42 => 1,  32 => 5,  29 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
    User registration
{% endblock %}

{% block body %}
    {% autoescape %}
        Welcome to our store!
        <br/><br/>
        You have just been registered.
        <br/>
        Thank you {{ user.username }}.
    {% endautoescape %}
{% endblock %}
", "SyliusShopBundle:Email:userRegistration.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Email/userRegistration.html.twig");
    }
}
