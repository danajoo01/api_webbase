package com.fathurrohman.danang.bahasacirebon;

import android.app.RemoteInput;
import android.content.Intent;
import android.net.Uri;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.KeyEvent;
import android.view.View;
import android.webkit.WebChromeClient;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;

public class MainActivity extends AppCompatActivity {

    private WebView myWebView;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        WebView myWebView = (WebView) findViewById(R.id.webview);
        myWebView.getSettings().setLoadWithOverviewMode(true);
        myWebView.getSettings().setUseWideViewPort(true);
        myWebView.setWebViewClient(new WebViewClient());
        assert myWebView != null;
        myWebView.loadUrl("file:///android_asset/index.html");
        myWebView = (WebView) findViewById(R.id.webview);
        WebSettings webSettings = myWebView.getSettings();
        webSettings.setJavaScriptEnabled(true);
        webSettings.setMediaPlaybackRequiresUserGesture(false);


        final MainActivity MyActivity = this;
        myWebView.setWebChromeClient(new WebChromeClient()
        {
            public void onProgressChanged(WebView view, int progress)
            {
                MyActivity.setTitle("Loading...");
                MyActivity.setProgress(progress * 100);

                if(progress == 100)
                    MyActivity.setTitle(R.string.app_name);
            }
        });



    }

    private class MyWebViewClient extends WebViewClient {
        @Override
        public boolean shouldOverrideUrlLoading(WebView view, String url) {
            if (Uri.parse(url).getHost().equals("file:///android_asset/index.html")) {

                return false;
            }

            Intent intent = new Intent(Intent.ACTION_VIEW, Uri.parse(url));
            startActivity(intent);
            return true;
        }
    }

    public boolean onKey(View v, int keyCode, KeyEvent event)
    {
        if(event.getAction() == KeyEvent.ACTION_DOWN)
        {
            WebView webView = (WebView) v;

            switch(keyCode)
            {
                case KeyEvent.KEYCODE_BACK:
                    if(webView.canGoBack())
                    {
                        webView.goBack();
                        return true;
                    }
                    break;
            }
        }

        return false;
    }
}
