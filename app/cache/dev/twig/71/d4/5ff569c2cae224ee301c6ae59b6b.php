<?php

/* WebProfilerBundle:Profiler:toolbar_item.html.twig */
class __TwigTemplate_71d45ff569c2cae224ee301c6ae59b6b extends Twig_Template
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
        // line 1
        if ($this->getContext($context, "link")) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"), "panel" => $this->getContext($context, "name"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "icon"), "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter($this->getContext($context, "icon"), "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter($this->getContext($context, "text"), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  21 => 2,  276 => 248,  262 => 236,  260 => 235,  238 => 218,  24 => 3,  19 => 1,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  277 => 86,  267 => 85,  263 => 84,  257 => 234,  251 => 80,  246 => 78,  223 => 71,  219 => 70,  213 => 69,  168 => 60,  146 => 58,  142 => 56,  131 => 51,  128 => 50,  125 => 44,  155 => 58,  141 => 51,  135 => 47,  114 => 42,  78 => 21,  157 => 56,  136 => 44,  133 => 43,  111 => 37,  89 => 26,  85 => 25,  64 => 14,  45 => 8,  57 => 11,  51 => 10,  34 => 5,  31 => 6,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  184 => 70,  181 => 66,  173 => 85,  166 => 82,  163 => 59,  161 => 80,  156 => 77,  150 => 75,  144 => 53,  139 => 55,  126 => 45,  112 => 52,  109 => 41,  101 => 32,  93 => 28,  41 => 8,  28 => 3,  205 => 71,  198 => 67,  182 => 64,  178 => 66,  176 => 65,  170 => 61,  160 => 59,  145 => 57,  132 => 47,  119 => 42,  115 => 44,  102 => 30,  98 => 31,  90 => 41,  81 => 22,  74 => 21,  204 => 94,  191 => 70,  185 => 68,  167 => 64,  164 => 63,  153 => 54,  147 => 55,  138 => 45,  134 => 54,  127 => 52,  122 => 43,  120 => 50,  110 => 42,  108 => 31,  104 => 35,  95 => 34,  91 => 35,  87 => 40,  84 => 28,  80 => 32,  52 => 18,  49 => 17,  35 => 8,  32 => 4,  27 => 4,  86 => 29,  83 => 28,  77 => 24,  75 => 23,  71 => 17,  68 => 30,  62 => 25,  58 => 25,  56 => 13,  50 => 10,  44 => 10,  38 => 6,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 106,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 141,  330 => 140,  327 => 139,  325 => 138,  320 => 135,  314 => 131,  311 => 98,  308 => 97,  306 => 128,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 88,  280 => 114,  275 => 111,  273 => 110,  268 => 107,  264 => 105,  258 => 103,  254 => 101,  252 => 138,  247 => 97,  245 => 96,  240 => 219,  234 => 74,  231 => 88,  228 => 73,  226 => 86,  221 => 83,  215 => 79,  212 => 78,  209 => 73,  207 => 68,  202 => 73,  196 => 92,  193 => 68,  190 => 89,  188 => 67,  183 => 63,  177 => 59,  174 => 67,  171 => 62,  169 => 56,  165 => 58,  162 => 57,  154 => 48,  151 => 53,  148 => 74,  143 => 48,  140 => 42,  130 => 42,  123 => 35,  116 => 35,  107 => 36,  103 => 37,  100 => 24,  97 => 23,  92 => 33,  88 => 20,  82 => 19,  79 => 35,  76 => 34,  73 => 19,  67 => 15,  61 => 13,  55 => 24,  47 => 9,  36 => 7,  30 => 3,  70 => 20,  63 => 16,  60 => 13,  54 => 19,  48 => 8,  46 => 7,  42 => 15,  39 => 9,  37 => 8,  33 => 6,  29 => 3,  22 => 2,);
    }
}